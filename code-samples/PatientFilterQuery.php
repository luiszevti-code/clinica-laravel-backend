<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Listado con filtros avanzados y multinivel para optimizar la búsqueda 
     * transaccional y analítica de pacientes.
     */
    public function index(Request $request)
    {
        $query = Patient::with(['city.country', 'psychologist']);

        // Filtro por nombre o DNI (Búsqueda parcial)
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('dni', 'like', "%{$search}%");
            });
        }

        // Filtros relacionales directos
        if ($request->filled('country_id')) {
            $query->whereHas('city', function ($q) use ($request) {
                $q->where('country_id', $request->input('country_id'));
            });
        }

        if ($request->filled('city_id')) {
            $query->where('city_id', $request->input('city_id'));
        }

        if ($request->filled('gender')) {
            $query->where('gender', $request->input('gender'));
        }

        if ($request->filled('psychologist_id')) {
            $query->where('psychologist_id', $request->input('psychologist_id'));
        }

        // Paginación eficiente para grandes volúmenes de datos
        $patients = $query->latest()->paginate(15);

        return view('patients.index', compact('patients'));
    }
}