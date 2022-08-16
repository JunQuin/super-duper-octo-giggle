<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
/*    public function index()
    {
        return view('forms.inscripcion');
    }*/

/*    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */

    public function registrar(Request $request)
    {
        /*$validator = $this->validate($request, [
            'alumnoApellidoPaterno' => ['bail', 'required', 'max:60'],
            'alumnoCurp' => ['bail', 'required', 'unique:alumnos', 'min:18', 'max:18'],
            'alumnoCelular' => ['required', 'digits:10'],
            'alumnoApellidoMaterno' => ['bail', 'required', 'max:60'],
            'alumnoFechaNacimiento' => ['bail', 'required', 'date'],
            'alumnoAnoIngreso' => ['required'],
            'alumnoNombre' => ['bail', 'required', 'max:50'],
            'alumnoEmail' => ['bail', 'required', 'email', 'max:100'],
            'alumnoProcedencia' => ['bail', 'required', 'max:200'],
            'alumnoPromedio' => ['bail', 'required', 'numeric', 'min:0', 'max:10'],
            'alumnoDomicilioCalle' => ['bail', 'required', 'max:200'],
            'alumnoDomicilioMunicipio' => ['bail', 'required', 'max:200'],
            'alumnoDomicilioLocalidad' => ['bail', 'required', 'max:200'],
            'alumnoDomicilioColonia' => ['bail', 'required', 'max:200'],
            'alumnoDomicilioCP' => ['bail', 'required', 'digits:5'],
            'alumnoTutorApellidoPaterno' => ['bail', 'required', 'max:60'],
            'alumnoTutorApellidoMaterno' => ['bail', 'required', 'max:60'],
            'alumnoTutorNombre' => ['bail', 'required', 'max:60'],
            'alumnoTutorOcupacion' => ['bail', 'required', 'max:60'],
            'alumnoTutorCelular' => ['required', 'digits:10'],
            'alumnoTutorEmail' => ['bail', 'required', 'email', 'max:100'],
            'alumnoTutorTelefono' => ['max:10'],
        ]);

        $alumnoApellidoPaterno = $request->alumnoApellidoPaterno;
        $alumnoCurp = $request->alumnoCurp;
        $alumnoCelular = $request->alumnoCelular;
        $alumnoApellidoMaterno = $request->alumnoApellidoMaterno;
        $alumnoFechaNacimiento = $request->alumnoFechaNacimiento;
        $alumnoAnoIngreso = $request->alumnoAnoIngreso;
        $alumnoNombre = $request->alumnoNombre;
        $alumnoEmail = $request->alumnoEmail;
        $alumnoProcedencia = $request->alumnoProcedencia;
        $alumnoPromedio = $request->alumnoPromedio;
        $alumnoDomicilioCalle = $request->alumnoDomicilioCalle;
        $alumnoDomicilioMunicipio = $request->alumnoDomicilioMunicipio;
        $alumnoDomicilioLocalidad = $request->alumnoDomicilioLocalidad;
        $alumnoDomicilioColonia = $request->alumnoDomicilioColonia;
        $alumnoDomicilioCP = $request->alumnoDomicilioCP;
        $alumnoTutorApellidoPaterno = $request->alumnoTutorApellidoPaterno;
        $alumnoTutorApellidoMaterno = $request->alumnoTutorApellidoMaterno;
        $alumnoTutorNombre = $request->alumnoTutorNombre;
        $alumnoTutorOcupacion = $request->alumnoTutorOcupacion;
        $alumnoTutorCelular = $request->alumnoTutorCelular;
        $alumnoTutorEmail = $request->alumnoTutorEmail;
        $alumnoTutorTelefono = $request->alumnoTutorTelefono;

        $saveAlumno = new Alumno();
        $saveAlumno->alumnoApellidoPaterno = $alumnoApellidoPaterno ;
        $saveAlumno->alumnoCurp = $alumnoCurp ;
        $saveAlumno->alumnoCelular = $alumnoCelular ;
        $saveAlumno->alumnoApellidoMaterno = $alumnoApellidoMaterno ;
        $saveAlumno->alumnoFechaNacimiento = $alumnoFechaNacimiento ;
        $saveAlumno->alumnoAnoIngreso = $alumnoAnoIngreso ;
        $saveAlumno->alumnoNombre = $alumnoNombre ;
        $saveAlumno->alumnoEmail = $alumnoEmail ;
        $saveAlumno->alumnoProcedencia = $alumnoProcedencia ;
        $saveAlumno->alumnoPromedio = $alumnoPromedio ;
        $saveAlumno->alumnoDomicilioCalle = $alumnoDomicilioCalle ;
        $saveAlumno->alumnoDomicilioMunicipio = $alumnoDomicilioMunicipio ;
        $saveAlumno->alumnoDomicilioLocalidad = $alumnoDomicilioLocalidad ;
        $saveAlumno->alumnoDomicilioColonia = $alumnoDomicilioColonia ;
        $saveAlumno->alumnoDomicilioCP = $alumnoDomicilioCP ;
        $saveAlumno->alumnoTutorApellidoPaterno = $alumnoTutorApellidoPaterno ;
        $saveAlumno->alumnoTutorApellidoMaterno = $alumnoTutorApellidoMaterno ;
        $saveAlumno->alumnoTutorNombre = $alumnoTutorNombre ;
        $saveAlumno->alumnoTutorOcupacion = $alumnoTutorOcupacion ;
        $saveAlumno->alumnoTutorCelular = $alumnoTutorCelular ;
        $saveAlumno->alumnoTutorEmail = $alumnoTutorEmail ;
        $saveAlumno->alumnoTutorTelefono = $alumnoTutorTelefono ;*/

        /*if ($saveAlumno->save()){
            return view('success');
        } else{
            return view('error');
        }*/

        /*$this->validate($request, [
            'alumnoApellidoPaterno' => 'required',
            'descripcion' => 'required',
            'urlPDF' => 'required|mimes:pdf',
            'nivel' => 'required',
            'ano' => 'required | max:8',

        ]);*/
    }
}
