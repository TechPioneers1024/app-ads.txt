<!DOCTYPE html>
<html lang="en" class="ie_11_scroll">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="hhhwidth=device-width, initial-scale=1">
        <title>App Landing Page</title>
<!--

App Landing Template

http://www.templatemo.com/tm-474-app-landing

-->
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="favicon.png" />
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Top menu -->
        <div class="show-menu">
            <a href="#" class="shadow-top-down">+</a>
        </div>
        <nav class="main-menu shadow-top-down">
            <ul class="nav nav-pills nav-stacked">
                <li><a class="scroll_effect" href="index.html">Home</a></li>
                <li><a class="scroll_effect" href="#templatemo_element">Elements</a></li>
            </ul>
        </nav>
        <!-- Elements -->
        <section id="templatemo_element">
            <div class="container">
                <header class="template_header">
                    <h1 class="text-center"><span>...</span> Elements <span>...</span></h1>
                </header>
                <div class="col-md-6">
                    <h2>Typo Elements</h2>
                    <p>Quis nostrud exercitation <b>bold</b> ullamco <strong>strong</strong> laboris nisi <i>italic</i>ut aliquip ex <em>emphasized</em>ea commodo consequat. <sup>superscript</sup> Duis aute irure dolor in <sub>subscript</sub> reprehenderit in voluptate <u>underlined</u> velit esse cillum dolore <code>for (;;) { ... }</code>eu fugiat <a href="#">hyper link</a>nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                </div>
                <div class="col-md-6">
                    <h2>Heading and Paragraph</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                </div>
                <div class="clearfix"></div>
                <hr />
                <div class="col-md-6">
                    <h2>Heading 2</h2>
                    <h3>Heading 3</h3>
                    <h4>Heading 4</h4>
                    <h5>Heading 5</h5>
                    <h6>Heading 6</h6>
                </div>
                <div class="col-md-6">
                    <h2>Blockquote</h2>
                    <blockquote>Eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
                </div>
                <div class="col-xs-12">
<pre><code>$('.show-menu a').on('click', function(e){
    // When nav is visible make nav hide
    if($('nav').is(":visible")){
        $('nav:visible').animate({opacity: 0,top: 120}, 300,"linear",function(){
            $(this).hide();
        });
        return false;
    // When nav is not visible make nav show
    }else{
        $('nav')
            .show()
            .css({opacity: 0,top: 120})
            .animate({opacity: 1,top: 130}, 300,"linear");
        return false;
    }
});</code></pre>
                </div>
                <div class="col-md-6">
                    <h2>Lists</h2>
                    <h3>Unordered list</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Sed do eiusmod tempor incididunt</li>
                        <li>Ut labore et dolore magna aliqua</li>
                        <li>Ut enim ad minim veniam, quis nostrud</li>
                    </ul>
                    <h3>Ordered list</h3>
                    <ol>
                        <li>Exercitation ullamco laboris nisi</li>
                        <li>Ut aliquip ex ea commodo consequat</li>
                        <li>Duis aute irure dolor in reprehenderit</li>
                        <li>In voluptate velit esse cillum dolore</li>
                        <li>Eu fugiat nulla pariatur</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <h2>Icons</h2>
                    <p>Isons credit to <a href="https://fortawesome.github.io/Font-Awesome/">Font Awesome</a>.</p>
                    <div id="element-icon-wapper">
                      <div class="col-xs-4"><i class="fa fa-angle-double-down"></i></div>
                      <div class="col-xs-4"><i class="fa fa-angle-double-left"></i></div>
                      <div class="col-xs-4"><i class="fa fa-angle-double-right"></i></div>
                      <div class="col-xs-4"><i class="fa fa-angle-double-up"></i></div>
                      <div class="col-xs-4"><i class="fa fa-angle-down"></i></div>
                      <div class="col-xs-4"><i class="fa fa-angle-left"></i></div>
                      <div class="col-xs-4"><i class="fa fa-angle-right"></i></div>
                      <div class="col-xs-4"><i class="fa fa-angle-up"></i></div>
                      <div class="col-xs-4"><i class="fa fa-apple"></i></div>
                      <div class="col-xs-4"><i class="fa fa-angellist"></i></div>
                      <div class="col-xs-4"><i class="fa fa-archive"></i></div>
                      <div class="col-xs-4"><i class="fa fa-area-chart"></i></div>
                      <div class="col-xs-4"><i class="fa fa-arrow-circle-down"></i></div>
                      <div class="col-xs-4"><i class="fa fa-arrow-circle-left"></i></div>
                      <div class="col-xs-4"><i class="fa fa-arrow-circle-o-down"></i></div>
                      <div class="col-xs-4"><i class="fa fa-arrow-circle-o-left"></i></div>
                      <div class="col-xs-4"><i class="fa fa-arrow-circle-o-right"></i></div>
                      <div class="col-xs-4"><i class="fa fa-truck"></i></div>
                      <div class="col-xs-4"><i class="fa fa-trophy"></i></div>
                      <div class="col-xs-4"><i class="fa fa-trello"></i></div>
                      <div class="col-xs-4"><i class="fa fa-tree"></i></div>
                      <div class="col-xs-4"><i class="fa fa-trash-o"></i></div>
                      <div class="col-xs-4"><i class="fa fa-trash"></i></div>
                      <div class="col-xs-4"><i class="fa fa-toggle-up"></i></div>
                      <div class="col-xs-4"><i class="fa fa-toggle-right"></i></div>
                      <div class="col-xs-4"><i class="fa fa-toggle-on"></i></div>
                      <div class="col-xs-4"><i class="fa fa-toggle-off"></i></div>
                      <div class="col-xs-4"><i class="fa fa-toggle-left"></i></div>
                      <div class="col-xs-4"><i class="fa fa-toggle-down"></i></div>
                      <div class="col-xs-4">
                            <a href="https://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">More icons</a>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr />
                <div class="col-md-12">
                    <h2>Definitation</h2>
                </div>
                <div class="col-md-6">
                    <h3>Definitation Default</h3>
                    <dl>
                        <dt>Excepteur sint occaecat</dt>
                        <dd>cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</dd>
                    </dl>
                    <dl>
                        <dt>Lorem ipsum dolor sit amet</dt>
                        <dd>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
                    </dl>
                    <dl>
                        <dt>Ut enim ad minim veniam, quis nostrud</dt>
                        <dd>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <h3>Definitation Horisional</h3>
                    <dl class="dl-horizontal">
                        <dt>In voluptate</dt>
                        <dd>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Sunt in culpa</dt>
                        <dd>deserunt mollit anim id est laborum mi porta gravida at eget metus.</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Lorem ipsum dolor</dt>
                        <dd>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</dd>
                    </dl>
                </div>
                <div class="clearfix"></div>
                <hr />
                <div class="col-md-6">
                    <h2>Buttons</h2>
                    <h3>Buttons Lg</h3>
                    <a class="btn btn-lg btn-default" href="#" role="button">Link</a>
                    <button class="btn btn-lg btn-default" type="submit">Button</button>
                    <input class="btn btn-lg btn-default" type="button" value="Input">
                    <input class="btn btn-lg btn-default" type="submit" value="Submit">
                    <h3>Buttons Default</h3>
                    <a class="btn btn-default" href="#" role="button">Link</a>
                    <button class="btn btn-default" type="submit">Button</button>
                    <input class="btn btn-default" type="button" value="Input">
                    <input class="btn btn-default" type="submit" value="Submit">
                    <h3>Buttons Sm</h3>
                    <a class="btn btn-sm btn-default" href="#" role="button">Link</a>
                    <button class="btn btn-sm btn-default" type="submit">Button</button>
                    <input class="btn btn-sm btn-default" type="button" value="Input">
                    <input class="btn btn-sm btn-default" type="submit" value="Submit">
                    <h3>Buttons Xs</h3>
                    <a class="btn btn-xs btn-default" href="#" role="button">Link</a>
                    <button class="btn btn-xs btn-default" type="submit">Button</button>
                    <input class="btn btn-xs btn-default" type="button" value="Input">
                    <input class="btn btn-xs btn-default" type="submit" value="Submit">
                </div>
                <div class="col-md-6">
                    <h2>Table</h2>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Item One</td>
                                <td>quis nostrud exercitation ullamco laboris</td>
                                <td>00.00</td>
                            </tr>
                            <tr>
                                <td>Item Two</td>
                                <td>nisi ut aliquip ex ea commodo consequat.</td>
                                <td>00.00</td>
                            </tr>
                            <tr>
                                <td>Item Three</td>
                                <td>Duis aute irure dolor in reprehenderit in voluptate velit esse</td>
                                <td>00.00</td>
                            </tr>
                            <tr>
                                <td>Item Four</td>
                                <td>cillum dolore eu fugiat nulla pariatur.</td>
                                <td>00.00</td>
                            </tr>
                            <tr>
                                <td>Item Five</td>
                                <td>Excepteur sint occaecat cupidatat non proident.</td>
                                <td>00.00</td>
                            </tr>
                            <tr>
                                <td>Item Five</td>
                                <td>sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                                <td>00.00</td>
                            </tr>
                            <tr>
                                <td>Item Six</td>
                                <td>cillum dolore eu fugiat nulla pariatur.</td>
                                <td>00.00</td>
                            </tr>
                            <tr>
                                <td>Item Seven</td>
                                <td>Duis aute irure dolor in reprehenderit in voluptate velit esse</td>
                                <td>00.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="clearfix"></div>
                <hr />
                <div class="col-md-6">
                    <h2>Form</h2>
                    <form action="#" method="POST" class="col-xs-12 row" role="form">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file">File input</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-file-o"></i></div>
                                <input type="file" id="file" class="form-control">
                            </div>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="form-group">
                            <label for="option">Option</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-list-ul"></i></div>
                                <select class="form-control" id="option">
                                    <option>Option A</option>
                                    <option>Option B</option>
                                    <option>Option C</option>
                                    <option>Option D</option>
                                    <option>Option E</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Checkbox</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check option A
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check option B
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check option C
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Sumbit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h2>Image Grid</h2>
                    <div id="img-grid-wapper">
                        <div class="col-xs-6"><img src="images/blur_img.jpg" alt="" class="img-responsive img-rounded"></div>
                        <div class="col-xs-6"><img src="images/blur_img.jpg" alt="" class="img-responsive img-rounded"></div>
                        <div class="col-xs-4"><img src="images/blur_img.jpg" alt="" class="img-responsive img-rounded"></div>
                        <div class="col-xs-4"><img src="images/blur_img.jpg" alt="" class="img-responsive img-rounded"></div>
                        <div class="col-xs-4"><img src="images/blur_img.jpg" alt="" class="img-responsive img-rounded"></div>
                        <div class="col-xs-3"><img src="images/blur_img.jpg" alt="" class="img-responsive img-rounded"></div>
                        <div class="col-xs-3"><img src="images/blur_img.jpg" alt="" class="img-responsive img-rounded"></div>
                        <div class="col-xs-3"><img src="images/blur_img.jpg" alt="" class="img-responsive img-rounded"></div>
                        <div class="col-xs-3"><img src="images/blur_img.jpg" alt="" class="img-responsive img-rounded"></div>
                    </div>
                    <h2>&nbsp;</h2>
                    <h2>Text Grid</h2>
                    <div class="row">
                        <div class="col-xs-12"><h3>Two column</h3></div>
                        <div class="col-xs-6">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div class="col-xs-6">Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in.</div>
                        <div class="col-xs-12"><h3>One column</h3></div>
                        <div class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr />
                <div class="col-xs-12">
                    <h2>Paragraph and image on right</h2>
                    <p class="img-n-pargaraph">
                        <img src="images/blur_img.jpg" alt="" class="img-responsive img-rounded col-sm-4 pull-right">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <h2>Paragraph and image on left</h2>
                    <p class="img-n-pargaraph">
                        <img src="images/blur_img.jpg" alt="" class="img-responsive img-rounded col-sm-4 pull-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="templatemo_contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <header class="template_header">
                            <h1 class="text-center"><span>...</span> Contact <span>...</span></h1>
                        </header>
                        <p class="text-center">
                            <i class="fa fa-map-marker"></i> 1234 Lincoln Way, San Francisco, California<br />
                            <i class="fa fa-envelope"></i> Email: <a href="mailto:info@company.com">info@company.com</a><br />
                            <i class="fa fa-phone"></i> Phone: <a href="tel:010-020-0340">010-020-0340</a>
                        </p>
                    </div>
                </div>
                <form role="form" action="#" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" name="name" class="form-control" id="contact-name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-at"></i></div>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                            <textarea name="message" class="form-control" id="contact-message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-6 col-xs-offset-6">
                            <button type="submit" class="form-control">Send</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="nav nav-pills social">
                            <li><a href="#" class="shadow-top-down social-facebook"><i class="fa fa-facebook-official"></i></a></li>
                            <li><a href="#" class="shadow-top-down social-twitter"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#" class="shadow-top-down social-youtube"><i class="fa fa-youtube-square"></i></a></li>
                            <li><a href="#" class="shadow-top-down social-instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 footer-copyright">
                        <p>Copyright &copy; 2084 <a href="#" target="_parent">Company Name</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- require plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.parallax.js"></script>
        <!-- template mo config script -->
        <script src="js/templatemo_scripts.js"></script>
    </body>
</html>