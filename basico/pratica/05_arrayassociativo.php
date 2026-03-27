<?php

$enderecos = [
    "17500-001" => [
        "cep"    => "17500-001",
        "rua"    => "Avenida Sampaio Vidal",
        "bairro" => "Centro",
        "cidade" => "Marília",
        "uf"     => "SP"
    ],
    "01001-000" => [
        "cep"    => "01001-000",
        "rua"    => "Praça da Sé",
        "bairro" => "Sé",
        "cidade" => "São Paulo",
        "uf"     => "SP"
    ]
];

$cepBusca = "17500-001";

if (isset($enderecos[$cepBusca])) {
    $resultado = $enderecos[$cepBusca];

    echo "## Resultado da Consulta ## <br>";
    echo "CEP: " . $resultado['cep'] . "<br>";
    echo "Rua: " . $resultado['rua'] . "<br>";
    echo "Bairro: " . $resultado['bairro'] . "<br>";
    echo "Cidade: " . $resultado['cidade'] . " - " . $resultado['uf'];
} else {
    echo "Erro: CEP não encontrado em nossa base.";
}
?>