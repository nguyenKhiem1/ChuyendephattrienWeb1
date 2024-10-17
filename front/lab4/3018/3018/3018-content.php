<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3018">
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-title">
                        <h3 class="nav-link reptitle">Share This :</h3>
                    </li>
                    <li class="nav-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            fill="currentColor">
                            <path
                                d="M24 12.073C24 5.404 18.627 0 12 0S0 5.404 0 12.073C0 18.101 4.388 23.123 10.125 24V15.563h-3.047v-3.49h3.047V9.797c0-3.015 1.791-4.688 4.533-4.688 1.312 0 2.686.235 2.686.235v2.969h-1.513c-1.49 0-1.953.926-1.953 1.878v2.234h3.328l-.531 3.49h-2.797V24C19.612 23.123 24 18.101 24 12.073z" />
                        </svg>
                    </li>
                    <li class="nav-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            fill="currentColor">
                            <path
                                d="M24 4.556a9.83 9.83 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724 9.874 9.874 0 0 1-3.127 1.195 4.916 4.916 0 0 0-8.38 4.482A13.947 13.947 0 0 1 1.64 3.149a4.917 4.917 0 0 0 1.524 6.573 4.902 4.902 0 0 1-2.228-.615v.06a4.916 4.916 0 0 0 3.946 4.826 4.902 4.902 0 0 1-2.822.104 4.928 4.928 0 0 0 4.596 3.416A9.876 9.876 0 0 1 0 20.409a13.915 13.915 0 0 0 7.548 2.209c9.056 0 14.009-7.514 14.009-14.015 0-.213-.004-.425-.014-.636A10.004 10.004 0 0 0 24 4.556z" />
                        </svg>
                    </li>
                    <li class="nav-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32"
                            fill="currentColor">
                            <path
                                d="M16.002 1C7.163 1 0 8.162 0 17s7.163 16 16.002 16C24.837 33 32 25.837 32 17S24.837 1 16.002 1zm7.598 21.963l-1.23 5.196-4.857-1.29a14.956 14.956 0 01-6.79-4.547c-2.43-2.977-3.773-6.747-3.73-10.796.03-2.896 1.27-5.518 3.42-7.452 2.148-1.934 5.056-2.957 7.959-2.875a14.926 14.926 0 0114.275 12.052 14.952 14.952 0 01-8.952 9.722l.195.195-3.716-.986.003-.002z" />
                        </svg>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-2">
                    <img src="her.png" alt="Natalie Stanley" class="img-fluid rounded-circle">
                    
                </div>
                <div class="col-md-10">
                    <h4 class="reptitle">Natalie Stanley</h4>
                    <a href="">  <p>  Hi, this is dummy biographical info for the design template kit moxcreative. If any questions do
                    hesitate to send us a message on the profile page ThemeForest.  </p></a>   
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <h2 class="reptitle">Leave a Reply</h2>
            <p>Your email address will not be published. Required fields are marked *</p>
            <form>
                <div class="mb-3">
                    <label for="comment" class="form-label reptitle">Comment *</label>
                    <textarea class="form-control" id="comment" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label reptitle">Name *</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label reptitle">Email *</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="website" class="form-label reptitle">Website</label>
                    <input type="url" class="form-control" id="website">
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="saveInfo">
                    <label class="form-check-label" for="saveInfo">Save my name, email, and website in this browser for
                        the next time I comment.</label>
                </div>
                <button type="submit" class="btn btn-primary">Post Comment</button>
            </form>
        </div>
    </div>
</div>
</div>