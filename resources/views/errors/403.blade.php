@extends('layouts.front.empty')
@section('template')
    <div class="container d-flex flex-grow-1 align-items-center justify-content-center">
        <div class="row">
            <div class="text-center">
                <div class="mx-auto mb-4">
                    @include('components.common.multilingual.lang-switcher', [
                        'containerClasses' => ['text-end'],
                        'dropdownLabelClasses' => ['btn', 'btn-link'],
                        'dropdownMenuClasses' => ['dropdown-menu-end']
                    ])
                    @if($icon = settings()->getFirstMedia('icons'))
                        {{ $icon('auth') }}
                    @endif
                </div>
                <h1 class="h3 fw-normal text-danger mt-3">
                    <i class="far fa-times-circle fa-fw"></i>
                    {{ __($exception->getMessage()) }}
                </h1>
                {{ buttonBack()->route('home.page.show')->label(__('Back to home page'))->containerClasses(['mt-5']) }}
            </div>
        </div>
    </div>
@endsection
