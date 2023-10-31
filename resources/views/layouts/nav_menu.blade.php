<div class="site-navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                        aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav mr-auto">

                            <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}" title="Home"><i
                                        class="fas fa-home"></i>&nbsp; Home</a></li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    title="Projects">Projects <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('projects') }}" title="All Projects">All Projects</a>
                                    </li>
                                    @foreach ($project_types as $type)
                                        <li>
                                            <a href="{{ route('project-type', $type) }}"
                                                title="{{ $type->name }}">{{ $type->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Buy/Sale
                                    <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('land-wanted') }}" title="Land Wanted">Land Wanted</a></li>
                                    <li><a href="{{ route('flat-buy-sale') }}" title="Flat Buy/Sale">Flat Buy/Sale</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact-us') }}" title="Contact Us" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about-us') }}" title="About US" class="nav-link">About US</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('term-of-use') }}"
                                    title="Terms of Use">Terms of
                                    Use</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('message-from-md') }}"
                                    title="Message From MD">Message From MD</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
