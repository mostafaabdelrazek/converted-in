<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Task App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('task.list')}}">Tasks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('task.stats')}}">Stats</a>
        </li>
      </ul>
      <div class="d-flex" role="search">
        <a class="btn btn-sm btn-success" href="{{route('task.create')}}">New Task</a>
      </div>
    </div>
  </div>
</nav>