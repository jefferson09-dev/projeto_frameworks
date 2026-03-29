@extends('freelancer.layout')

@section('body')
    @include('freelancer.components.nav')
    @include('freelancer.components.masthead')
    @include('freelancer.components.portfolio')
    @include('freelancer.components.about')
    @include('freelancer.components.contact')
    @include('freelancer.components.footer')
    @include('freelancer.components.copyright')

    @include('freelancer.components.modals', [
        'modalId' => 'portfolioModal1',
        'modalTitle' => 'Cabana',
        'modalText' => 'Texto passado como parâmetro para o modal 1',
        'modalImage' => '/freelancer/assets/img/portfolio/cabin.png'])

    @include('freelancer.components.modals', [
        'modalId' => 'portfolioModal2',
        'modalTitle' => 'Bolo',
        'modalText' => 'Texto passado como parâmetro para o Bolo 2',
        'modalImage' => '/freelancer/assets/img/portfolio/cake.png',
    ])

    @include('freelancer.components.modals', [
        'modalId' => 'portfolioModal3',
        'modalTitle' => 'Circo',
        'modalText' => 'Texto passado como parâmetro para o Circo 3',
        'modalImage' => '/freelancer/assets/img/portfolio/circus.png',
    ])

    @include('freelancer.components.modals', [
        'modalId' => 'portfolioModal4',
        'modalTitle' => 'Nintendo',
        'modalText' => 'Texto passado como parâmetro para o Nintendo 4',
        'modalImage' => '/freelancer/assets/img/portfolio/game.png',
    ])

    @include('freelancer.components.modals', [
        'modalId' => 'portfolioModal5',
        'modalTitle' => 'Cofre',
        'modalText' => 'Texto passado como parâmetro para o Cofre 5',
        'modalImage' => '/freelancer/assets/img/portfolio/safe.png',
    ])

    @include('freelancer.components.modals', [
        'modalId' => 'portfolioModal6',
        'modalTitle' => 'Submarino',
        'modalText' => 'Texto passado como parâmetro para o Submarino 6',
        'modalImage' => '/freelancer/assets/img/portfolio/submarine.png',
    ])

@endsection