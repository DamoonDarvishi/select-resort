<?php
include "components/header/anotherHeader.php";
include "components/breadcrumbs/breadcrumbs.php";
?>
<div class="d-flex">
    <aside class="col-2 bd-aside sticky-xl-top text-muted align-self-start mb-3 mb-xl-5 px-2">
        <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">On this page</h2>
        <nav class="small" id="toc">
            <ul class="list-unstyled">
                <li class="my-2">
                    <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse"
                        aria-expanded="false" data-bs-target="#contents-collapse"
                        aria-controls="contents-collapse">Contents</button>
                    <ul class="list-unstyled ps-3 collapse" id="contents-collapse">
                        <li><a class="d-inline-flex align-items-center rounded" href="#typography">Typography</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#images">Images</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#tables">Tables</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#figures">Figures</a></li>
                    </ul>
                </li>
                <li class="my-2">
                    <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse"
                        aria-expanded="false" data-bs-target="#forms-collapse"
                        aria-controls="forms-collapse">Forms</button>
                    <ul class="list-unstyled ps-3 collapse" id="forms-collapse">
                        <li><a class="d-inline-flex align-items-center rounded" href="#overview">Overview</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#disabled-forms">Disabled
                                forms</a>
                        </li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#sizing">Sizing</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#input-group">Input group</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#floating-labels">Floating
                                labels</a>
                        </li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#validation">Validation</a></li>
                    </ul>
                </li>
                <li class="my-2">
                    <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse"
                        aria-expanded="false" data-bs-target="#components-collapse"
                        aria-controls="components-collapse">Components</button>
                    <ul class="list-unstyled ps-3 collapse" id="components-collapse">
                        <li><a class="d-inline-flex align-items-center rounded" href="#accordion">Accordion</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#alerts">Alerts</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#badge">Badge</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#breadcrumb">Breadcrumb</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#buttons">Buttons</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#button-group">Button group</a>
                        </li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#card">Card</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#carousel">Carousel</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#dropdowns">Dropdowns</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#list-group">List group</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#modal">Modal</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#navs">Navs</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#navbar">Navbar</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#pagination">Pagination</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#popovers">Popovers</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#progress">Progress</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#scrollspy">Scrollspy</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#spinners">Spinners</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#toasts">Toasts</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#tooltips">Tooltips</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
    <div class="bd-cheatsheet container-fluid bg-white">
        <h1>Typography Heading h1 --> Font Montserrat</h1>
        <h2>Typography Heading h2 --> Font Montserrat</h2>
        <h3>Typography Heading h3 --> Font Montserrat</h3>
        <h4>Typography Heading h4 --> Font Montserrat</h4>
        <h5>Typography Heading h5 --> Font Montserrat</h5>
        <h6>Typography Heading h6 --> Font Montserrat</h6>
        <br>
        <p>Typography Paragraph --> Font Roboto</p>
        <div>Typography Divition --> Font Roboto</div>
        <br>
        <span>Typography span --> Font Roboto</span>
    </div>
</div>