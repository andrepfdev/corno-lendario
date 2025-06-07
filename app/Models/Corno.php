<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Corno extends Model
{
    protected $fillable = [
        'nome',
        'idade',
        'cidade',
        'pontuacao',
        'nivel',
        'motivo',
        'data_descoberta',
    ];

    protected $casts = [
        'data_descoberta' => 'date',
        'pontuacao' => 'integer'
    ];

    public function updateNivel()
    {
        $this->nivel = $this->calcularNivel($this->pontuacao);
        $this->save();
    }

     public function calcularNivel($pontos): string
    {
        return match(true) {
            $pontos >= 1000 => "🦌 Corno Lendário",
            $pontos >= 800 => "👑 Corno Supremo", 
            $pontos >= 600 => "🥇 Corno Master",
            $pontos >= 400 => "🥈 Corno Veterano",
            $pontos >= 200 => "🥉 Corno Experiente",
            $pontos >= 100 => "📢 Corno Confirmado",
            $pontos >= 50 => "🤔 Corno Suspeito",
            default => "🌱 Corno Iniciante"
        };
    }

    public function getDescricaoNivel(): string
    {
        return match($this->nivel) {
            "🦌 Corno Lendário" => "O corno dos cornos! Virou mito urbano!",
            "👑 Corno Supremo" => "Dominou a arte de ser corno com maestria",
            "🥇 Corno Master" => "Corno profissional, já nem se importa mais",
            "🥈 Corno Veterano" => "Experiente no assunto, conhece os sinais",
            "🥉 Corno Experiente" => "Já passou por algumas, aprendendo ainda",
            "📢 Corno Confirmado" => "Oficialmente no clube dos cornos",
            "🤔 Corno Suspeito" => "Suspeitas no ar, investigação em andamento",
            default => "Ainda descobrindo os prazeres da cornisse"
        };
    }

    public function getPontosProximoNivel(): int
    {
        $proximosNiveis = [50, 100, 200, 400, 600, 800, 1000];
        
        foreach ($proximosNiveis as $pontos) {
            if ($this->pontuacao < $pontos) {
                return $pontos - $this->pontuacao;
            }
        }
        
        return 0; // Já é lendário
    }
}
