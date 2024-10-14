<?php

namespace App\Service;

class PythagoreUtility
{
    public function display(): string
    {
        $html = '<table><thead>';
        # Création de la première ligne du tableau qui est sans valeur
        $html .= '<tr>';
        for ($i = 0; $i <= 10; $i++) {
            $html .= '<th></th>';
        }
        $html .= '</tr>';
        $html .= '</thead><tbody>';
        $html .= '<tr>';
        # Création de la première ligne du tableau après le header
        for ($i = 0; $i <= 10; $i++) {
            $html .= '<td>' .$i. '</td>';
        }
        $html .= '</tr>';
        # Création des 10 autres lignes du tableau
        for ($i = 1; $i <= 10; $i++) {
            /* Si le premier nombre de la ligne est impair,
            ajouter un background-color à toute la ligne */
            $html .= '<tr' . ($i % 2 !== 0 ? ' class="table-ligne-impaire"' : '') . '>';
            $html .= '<td>' . $i . '</td>';
            # Donner des valeurs aux différentes cases de la ligne
            for ($j = 1; $j <= 10; $j++) {
                if ($i === $j) {
                    $html .= '<td>X</td>';
                } else {
                    $html .= '<td>' . ($i * $j) . '</td>';
                }
            }
            $html .= '</tr>';
        }
        $html .= '</tbody></table>';

        return $html;
    }
}
