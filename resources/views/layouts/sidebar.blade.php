<div class="list-group list-group-flush">
    <a href="{{ url('/') }}" class="list-group-item list-group-item-action {{ request()->is('/') ? 'active' : '' }}">
        Dashboard
    </a>
    <a href="{{ url('list-type-of-works') }}" class="list-group-item list-group-item-action {{ request()->is('list-type-of-works') ? 'active' : '' }}">
        Type of Work
    </a>
    <a href="{{ url('list-contractors') }}" class="list-group-item list-group-item-action {{ request()->is('list-contractors') ? 'active' : '' }}">
        Contractors
    </a>
    <a href="{{ url('list-conductors') }}" class="list-group-item list-group-item-action {{ request()->is('list-conductors') ? 'active' : '' }}">
        Conductors
    </a>
    <a href="{{ url('list-job-orders') }}" class="list-group-item list-group-item-action {{ request()->is('list-job-orders') ? 'active' : '' }}">
        Job Orders
    </a>
    <a href="{{ url('list-jos') }}" class="list-group-item list-group-item-action {{ request()->is('list-jos') ? 'active' : '' }}">
        JOS
    </a>
</div>
