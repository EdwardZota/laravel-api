<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Sidebar</span>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="{{ route('admin.dashboard') }}" class="nav-link text-white @if (Route::currentRouteName()=='admin.dashboard') active @endif">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Dashboard
        </a>
      </li>
      <li class="mb-1">
        <i class="fa-light fa-list-tree"></i>
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
            <i class="fa-light fa-list-tree"></i>
            <a href="{{ route('admin.projects.index') }}" class="nav-link text-white ps-1" >
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Projects
              </a>
        </button>
        <div class="collapse show" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li>
                <a href="{{ route('admin.projects.index') }}" class="nav-link text-white ms-4 @if (Route::currentRouteName()=='admin.projects.index') active @endif">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Elenco Progetti
                </a>
            </li>
            <li>
                <a href="{{ route('admin.projects.create') }}" class="nav-link text-white ms-4 @if (Route::currentRouteName()=='admin.projects.create') active @endif">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Aggiungi nuovo progetto
                </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <i class="fa-light fa-list-tree"></i>
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#type-collapse" aria-expanded="true">
            <i class="fa-light fa-list-tree"></i>
            <a href="{{ route('admin.projects.index') }}" class="nav-link text-white ps-1" >
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Types
              </a>
        </button>
        <div class="collapse show" id="type-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li>
                <a href="{{ route('admin.types.index') }}" class="nav-link text-white ms-4 @if (Route::currentRouteName()=='admin.types.index') active @endif">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Elenco Tipi
                  </a>
            </li>
            <li>
                <a href="{{ route('admin.types.create') }}" class="nav-link text-white ms-4 @if (Route::currentRouteName()=='admin.types.create') active @endif">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Aggiungi Tipo
                </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <i class="fa-light fa-list-tree"></i>
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#technology-collapse" aria-expanded="true">
            <i class="fa-light fa-list-tree"></i>
            <a href="{{ route('admin.projects.index') }}" class="nav-link text-white ps-1" >
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Technology
              </a>
        </button>
        <div class="collapse show" id="technology-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li>
                <a href="{{ route('admin.technologies.index') }}" class="nav-link text-white ms-4 @if (Route::currentRouteName()=='admin.technologies.index') active @endif">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Elenco Tecnologie
                  </a>
            </li>
            <li>
                <a href="{{ route('admin.technologies.create') }}" class="nav-link text-white ms-4 @if (Route::currentRouteName()=='admin.technologies.create') active @endif">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Aggiungi Tecnologia
                </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
