<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        // Dados fictícios para os produtos 
        $produtos = [
            [
                'id' => 1, 
                'nome' => 'Sistema Gestão Pro', 
                'preco' => 299.90, 
                'categoria' => 'Software',
                'imagem' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop&auto=format',
                'descricao_curta' => 'Sistema completo para gestão empresarial integrada'
            ],
            [
                'id' => 2, 
                'nome' => 'Headphone Executive', 
                'preco' => 199.90, 
                'categoria' => 'Hardware',
                'imagem' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=250&fit=crop&auto=format',
                'descricao_curta' => 'Fone premium para reuniões e calls profissionais'
            ],
            [
                'id' => 3, 
                'nome' => 'Monitor 24" Profissional', 
                'preco' => 899.90, 
                'categoria' => 'Hardware',
                'imagem' => 'https://images.unsplash.com/photo-1586210579191-33b45e38fa2c?w=400&h=250&fit=crop&auto=format',
                'descricao_curta' => 'Monitor full HD para trabalho e design'
            ],
            [
                'id' => 4, 
                'nome' => 'Consultoria Business', 
                'preco' => 1500.00, 
                'categoria' => 'Serviços',
                'imagem' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&h=250&fit=crop&auto=format',
                'descricao_curta' => 'Consultoria especializada em gestão empresarial'
            ],
            [
                'id' => 5, 
                'nome' => 'Teclado Mecânico RGB', 
                'preco' => 249.90, 
                'categoria' => 'Hardware',
                'imagem' => 'https://images.unsplash.com/photo-1541140532154-b024d705b90a?w=400&h=250&fit=crop&auto=format',
                'descricao_curta' => 'Teclado mecânico para produtividade máxima'
            ],
            [
                'id' => 6, 
                'nome' => 'Cloud Storage 1TB', 
                'preco' => 49.90, 
                'categoria' => 'Serviços',
                'imagem' => 'https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=400&h=250&fit=crop&auto=format',
                'descricao_curta' => 'Armazenamento em nuvem seguro e escalável'
            ],
        ];

        return view('pages.produtos.index', compact('produtos'));
    }

   public function show($id)
{
    // Descrições completas para cada produto
    $descricoes = [
        1 => 'Sistema completo de gestão empresarial que integra todos os departamentos da sua empresa. Inclui módulos de financeiro, estoque, vendas, CRM e relatórios personalizados. Ideal para empresas que buscam eficiência e controle total dos processos.',
        2 => 'Headphone profissional com cancelamento de ruído ativo, microfone embutido com qualidade de estúdio e bateria de longa duração. Perfeito para reuniões online, calls profissionais e concentração no trabalho.',
        3 => 'Monitor profissional 24 polegadas com resolução Full HD, taxa de atualização de 75Hz e tecnologia IPS para cores vibrantes. Ideal para designers, programadores e profissionais que precisam de precisão visual.',
        4 => 'Consultoria empresarial especializada com analistas experientes. Fazemos diagnóstico completo da sua empresa, identificamos oportunidades de melhoria e implementamos soluções personalizadas para seu negócio.',
        5 => 'Teclado mecânico com switches Blue, iluminação RGB personalizável e construção durável. Design ergonômico para conforto durante longas jornadas de trabalho e teclas programáveis para produtividade.',
        6 => 'Solução de armazenamento em nuvem com 1TB de espaço, backup automático, sincronização em tempo real e segurança enterprise. Acesse seus arquivos de qualquer lugar com total segurança e confiabilidade.'
    ];

    // Imagens para cada produto 
    $imagens = [
        1 => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&h=400&fit=crop&auto=format',
        2 => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=250&fit=crop&auto=format',
        3 => 'https://images.unsplash.com/photo-1586210579191-33b45e38fa2c?w=500&h=400&fit=crop&auto=format',
        4 => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&h=250&fit=crop&auto=format',
        5 => 'https://images.unsplash.com/photo-1541140532154-b024d705b90a?w=500&h=400&fit=crop&auto=format',
        6 => 'https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=400&h=250&fit=crop&auto=format'
    ];

    // Nomes 
    $nomes = [
        1 => 'Sistema Gestão Pro',
        2 => 'Headphone Executive', 
        3 => 'Monitor 24" Profissional',
        4 => 'Consultoria Business',
        5 => 'Teclado Mecânico RGB',
        6 => 'Cloud Storage 1TB'
    ];

    // Categorias 
    $categorias = [
        1 => 'Software',
        2 => 'Hardware',
        3 => 'Hardware',
        4 => 'Serviços',
        5 => 'Hardware',
        6 => 'Serviços'
    ];

    // Preços 
    $precos = [
        1 => 299.90,
        2 => 199.90,
        3 => 899.90,
        4 => 1500.00,
        5 => 249.90,
        6 => 49.90
    ];

    // Produto 
    $produto = [
        'id' => $id,
        'nome' => $nomes[$id] ?? 'Produto ' . $id,
        'preco' => $precos[$id] ?? (199.90 + ($id * 50)),
        'descricao' => $descricoes[$id] ?? 'Descrição completa do produto premium.',
        'categoria' => $categorias[$id] ?? 'Categoria ' . $id,
        'imagem' => $imagens[$id] ?? 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&h=400&fit=crop&auto=format'
    ];

    return view('pages.produtos.show', compact('produto'));
}
}