<?php

namespace App\Exports;

use App\Models\Cuestionario;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class QuestionaireExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Cuestionario::with('opciones_carreras')->get();
    }

    public function map($cuestionario): array
    {
        return [
            $cuestionario->id,
            $cuestionario->alumno->nombreCompleto,
            $cuestionario->alumno->correo,
            $cuestionario->alumno->genero == 1 ? 'M' : 'F',
            $cuestionario->alumno->telefono,
            $cuestionario->alumno->curp,
            $cuestionario->alumno->direccion->calle,
            $cuestionario->alumno->direccion->numero,
            $cuestionario->alumno->direccion->colonia,
            $cuestionario->alumno->direccion->localidad,
            $cuestionario->alumno->direccion->codigo_postal,
            $cuestionario->alumno->formacion->subsistema->nombre,
            $cuestionario->alumno->formacion->plantel->nombre,
            $cuestionario->alumno->formacion->campo_formacion->nombre,
            $cuestionario->continuar_estudios == 1 ? 'Si' : 'No',
            $cuestionario->baja ? ($cuestionario->baja->causa_baja_id == 6 ? $cuestionario->baja->otra_causa : $cuestionario->baja->causa_baja->causa) : 'N/A',
            $cuestionario->baja ? ($cuestionario->baja->apoyo_economico == 1 ? 'Si' : 'No') : 'N/A',
            $cuestionario->modalidad_estudios?->modalidad ?: 'N/A',
            $cuestionario->universidadPrincipal,
            $cuestionario->opcionPrincipal,
            $cuestionario->universidadSecundaria,
            $cuestionario->opcionSecundaria,
            $cuestionario->mes ? $cuestionario->mes + 1 : 'N/A',
            $cuestionario->folleto_impreso !== null ? ($cuestionario->folleto_impreso == 1 ? 'Impreso' : 'Digital') : 'N/A',
            $cuestionario->aviso_privacidad == 1 ? 'Si' : 'No'
        ];
    }
    public function headings(): array
    {
        return [
            'ID',
            'Nombre',
            'Correo',
            'Género',
            'Teléfono',
            'CURP',
            'Calle',
            'Número',
            'Colonia',
            'Localidad',
            'Código postal',
            'Subsistema',
            'Plantel',
            'Área de conocimiento',
            'continuar',
            'Motivo baja',
            'Apoyo económico',
            'Modelo educativo',
            'Opción 1',
            'Carrera 1',
            'Opción 2',
            'Carrera 2',
            'Mes Folleto',
            'Formato Folleto',
            'Autoriza compartir datos'
        ];
    }
}
