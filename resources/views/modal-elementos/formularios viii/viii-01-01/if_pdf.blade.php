@if ($item->reglas == 'I Política.')
    {{$ruta = route('pdf_sasisopa.view')}};

@elseif ($item->reglas == 'I-01 Procedimiento de elaboración y comunicación de la política.')
{{$ruta = route('pdf_i_01.view')}};

@elseif ($item->reglas == 'II Identificación de peligros y aspectos ambientales, análisis de riesgos y evaluación de
impactos ambientales.')
{{$ruta = route('pdf_ii.view')}};

@elseif ($item->reglas == 'II-01 Procedimiento para la identificación de peligros y evaluación de riesgos.')
{{$ruta = route('pdf_ii_01.view')}};

@elseif ($item->reglas == 'III Requisitos legales.')
{{$ruta = route('pdf_iii.view')}};

@elseif ($item->reglas == 'III-01 Procedimiento de identificación y evaluación de requisitos legales.')
{{$ruta = route('pdf_iii_01.view')}};

@elseif ($item->reglas == 'IV Objetivos, metas e indicadores.')
{{$ruta = route('pdf_iv.view')}};

@elseif ($item->reglas == 'IV-01 Procedimiento para el establecimiento de objetivos, metas e indicadores.')
{{$ruta = route('pdf_iv_01.view')}};

@elseif ($item->reglas == 'V Funciones, responsabilidades y autoridad.')
{{$ruta = route('pdf_v.view')}};

@elseif ($item->reglas == 'V-01 Procedimiento de funciones y responsabilidades.')
{{$ruta = route('pdf_v_01.view')}};

@elseif ($item->reglas == 'VI Competencia del personal, capacitación y entrenamiento.')
{{$ruta = route('pdf_vi.view')}};

@elseif ($item->reglas == 'VI-01 Procedimiento de competencia, capacitación y entrenamiento interna y externa.')
{{$ruta = route('pdf_vi_01.view')}};

@elseif ($item->reglas == 'VII Comunicación, participación y consulta.')
{{$ruta = route('pdf_vii.view')}};

@elseif ($item->reglas == 'VII-01 Procedimiento de comunicación interna y externa.')
{{$ruta = route('pdf_vii_01.view')}};

@elseif ($item->reglas == 'VII-03 Procedimiento de solicitud de información, quejas o sugerencias.')
{{$ruta = route('pdf_vii_03.view')}};

@else
{{$ruta = '#'}};

@endif

