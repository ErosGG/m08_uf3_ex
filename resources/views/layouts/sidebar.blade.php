@php
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Str;
    $section = Str::of(Route::currentRouteName())->explode('.')->pull(0);
@endphp

<div class="vh-100 sticky-top d-flex flex-column flex-shrink-0 p-3 bg-dark text-white" style="width: 280px;">
    {{--            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">--}}
    <a href="/" class="d-flex align-items-center me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="27"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Casals de la Generalitat</span>
    </a>
    <hr>
    {{--            <ul class="nav nav-pills flex-column mt-2 pt-3 mb-auto">--}}
    <ul class="nav nav-pills flex-column mt-4 mb-auto">
        <li>
            <a href="{{ route('camps.index') }}" class="d-flex align-items-center nav-link text-white fs-5 @if($section === 'camps'){{ 'active' }}@endif">
                <svg style="margin-left: 10px; margin-right: 10px;"
                     xmlns="http://www.w3.org/2000/svg" width="32" height="27" fill="currentColor"  viewBox="0 0 16 16"
                     class="bi bi-diagram-3"
                >
                    <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                </svg>
                Camps
            </a>
        </li>
        <li>
            <a href="{{ route('cities.index') }}" class="d-flex align-items-center nav-link text-white fs-5 @if($section === 'cities'){{ 'active' }}@endif">
                <svg style="margin-left: 10px; margin-right: 10px;"
                     xmlns="http://www.w3.org/2000/svg" width="32" height="27" fill="currentColor"  viewBox="0 0 16 16"
                     class="bi bi-diagram-3"
                >
                    <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
                </svg>
                Ciutats
            </a>
        </li>
    </ul>
    <hr>
</div>
