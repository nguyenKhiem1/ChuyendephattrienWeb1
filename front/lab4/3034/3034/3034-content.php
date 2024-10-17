<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3034">
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-light">

            <div class="container-fluid">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                       <h4 class="home-title">Home</h4>
                    </li>
                    <li class="nav-item">
                    <i class='fas fa-angle-right' style='font-size:24px'></i>
                    </li>
                    <li class="nav-item a">
                        <h4>PRICING PLANS</h4>
                    </li>
                </ul>
            </div>

        </nav>
    </div>

    <div class="container pricing-plan">
        <div class="pricing-title">Pricing Plan 01</div>

        <div class="row">

            <div class="col-md-6">
                <div class="pricing-header">PHONE & TABLET</div>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Services</th>
                            <th>Phone</th>
                            <th>Tablet</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Screen Replacement</td>
                            <td>$44</td>
                            <td>$62</td>
                        </tr>
                        <tr>
                            <td>Battery Replacement</td>
                            <td>$26</td>
                            <td>$34</td>
                        </tr>
                        <tr>
                            <td>Phone Unlocking</td>
                            <td>$29</td>
                            <td>$38</td>
                        </tr>
                        <tr>
                            <td>Water Damage Repair</td>
                            <td>$56</td>
                            <td>$72</td>
                        </tr>
                        <tr>
                            <td>Frame Replacement</td>
                            <td>$60</td>
                            <td>$85</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6">
                <div class="pricing-header">DESKTOP & LAPTOP</div>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Services</th>
                            <th>Desktop</th>
                            <th>Laptop</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>OS Installation</td>
                            <td>$15</td>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <td>Hard Disk Replacement</td>
                            <td>$55</td>
                            <td>$50</td>
                        </tr>
                        <tr>
                            <td>Screen Replacement</td>
                            <td>$45</td>
                            <td>$42</td>
                        </tr>
                        <tr>
                            <td>Water Damage Repair</td>
                            <td>$56</td>
                            <td>$72</td>
                        </tr>
                        <tr>
                            <td>Frame Replacement</td>
                            <td>$60</td>
                            <td>$85</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>
</div>