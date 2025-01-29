<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Constrói o componente.
     *
     * @return void
     */
    public function __construct()
    {
        // Aqui você pode passar dados adicionais para o layout se necessário.
    }

    /**
     * Retorna a view do layout.
     *
     * @return \Illuminate\View\View
     */
    public function render(): View
    {
        return view('layouts.app');  // Certifique-se de que o caminho está correto.
    }
}
