<?php

?>
<html>
    <head>
        <title>INFORMATION</title>
        <link rel="shortcut icon" type="image/x-icon" href="pics/TZRealEstate Logo 2.PNG"/>
<!--        The CSS-->
        <link rel="stylesheet" type="text/css" href="contacts.css">
        <link rel="stylesheet" type="text/css" href="sidenav.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    
    <body>
<!--        The Flying Dots Background-->
<div class="bg">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="index.php">
                TZ REAL ESTATE
                </a>
              </div>
            </div>
            <!-- /.container-fluid -->
          </nav>

          <main class="container-fluid"  style="margin-top: 60px;">
            <div class="row">
              <div class="col-xs-12">
                <ul class="nav nav-tabs nav-tabs-left nav-centered" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#code" data-toggle="tab" role="tab">
                      <span class="fa fa-info"></span>
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#download" data-toggle="tab" role="tab">
                      <span class="fa fa-book"></span>
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#profile" data-toggle="tab" role="tab">
                      <span class="fa fa-cloud-download"></span>
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#profile" data-toggle="tab" role="tab">
                      <span class="fa fa-wrench"></span>
                    </a>
                  </li>
                </ul>

                <div id="my_side_tabs" class="tab-content side-tabs side-tabs-left">
                  <div class="tab-pane fade in active" id="code" role="tabpanel">
                    <div class="col-lg-6">
                      <div class="panel panel-primary">
                        <header class="panel-heading">
                          <h3 class="panel-title">Horizontal Tabs for Bootstrap 3</h3>
                        </header>
                        <section class="panel-body">
                          <p>Sometimes, it's just nicer to have tabs to the side.</p>
                          <p>This is still a work in progress, as I still need to get the right-side tabs written, but left-side tabs are good to go.</p>
                        </section>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="panel panel-default">
                        <header class="panel-heading">
                          <h3 class="panel-title">Features</h3>
                        </header>
                        <section class="panel-body">
                          <p>It would be horrible if the tab panes had a smaller height than the column of tabs to the left, there. As you can see, I've taken care of that with a little jQuery action.</p>
                          <p><strong>Update!!</strong> This is obsolete. With newer browsers, this statement above can be achieved using a flex layout.</p>
                        </section>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="panel panel-default">
                        <header class="panel-heading">
                          <h3 class="panel-title">To Do...</h3>
                        </header>
                        <ul class="list-group">
                          <li class="list-group-item">Get the right-side-tabs working</li>
                          <li class="list-group-item">Support multiple instances of this "widget" on the same page</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel">
                    <table class="table table-condensed table-striped">
                      <colgroup>
                        <col class="time" />
                        <col class="did" />
                        <col />
                        <col class="repname" />
                        <col />
                        <col class="time" />
                        <col />
                        <col />
                      </colgroup>
                      <thead>
                        <tr>
                          <th>Concerning</th>
                          <th>Document Name</th>
                          <th>Comment</th>
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><time>Land</time></td>
                          <td>Commercial</td>
                          <td>Requirements for Commercial Land Purposes.</td>
                          <td><span class="btn btn-xs btn-primary">Download</span></td>
                        </tr>
                        <tr>
                          <td><time>Land</time></td>
                          <td>Residential</td>
                          <td>Requirements for Residential Land Purposes.</td>
                          <td><span class="btn btn-xs btn-primary">Download</span></td>
                        </tr>
                        <tr>
                          <td><time>Sales</time></td>
                          <td>Commercial</td>
                          <td>Requirements for Commercial Sales Purposes.</td>
                          <td><span class="btn btn-xs btn-primary">Download</span></td>
                        </tr>
                        <tr>
                          <td><time>Sales</time></td>
                          <td>Residential</td>
                          <td>Requirements for Residential Sales Purposes.</td>
                          <td><span class="btn btn-xs btn-primary">Download</span></td>
                        </tr>
                        <tr>
                          <td><time>Rent</time></td>
                          <td>Commercial</td>
                          <td>Requirements for Commercial Office Property Rent.</td>
                          <td><span class="btn btn-xs btn-primary">Download</span></td>
                        </tr>
                        <tr>
                          <td><time>Rent</time></td>
                          <td>Residential</td>
                          <td>Requirements for Residential Property Rent.</td>
                          <td><span class="btn btn-xs btn-primary">Download</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="favourite" role="tabpanel">
                    <p>Suspendisse blandit libero id suscipit consectetur. Cras ultrices sem sit amet est efficitur iaculis ut non est. Morbi porttitor eu felis ac aliquet.</p>
                  </div>
                    <div class="tab-pane fade" id="download" role="tabpanel" style="height: 625px; overflow-y: hidden;">
                        <div class="contact_body"><div class="contact_thingie" style=" margin-top: 5px;">
                            <div class="row header"style="margin-left: 0px">
                          <h1>LET US KNOW &nbsp;</h1>
                          <h3>Fill out the form to communicate later!</h3>
                        </div>
                        <div class="row body">
                          <form action="#">
                            <ul>

                              <li>
                                <p class="left">
                                  <label for="first_name">First name</label>
                                  <input type="text" name="first_name" placeholder="John / Jane" />
                                </p>
                                <p class="pull-right">
                                  <label for="last_name">Last name</label>
                                  <input type="text" name="last_name" placeholder="Smith" />
                                </p>
                              </li>

                              <li>
                                <p>
                                  <label for="email">Email <span class="req">*</span></label>
                                  <input type="email" name="email" placeholder="jane/john.smith@gmail.com" required/>
                                </p>
                              </li>
                              <li>
                                <div class="divider"></div>
                              </li>
                              <li>
                                <label for="comments">Any Comments</label>
                                <textarea cols="46" rows="3" name="comments"></textarea>
                              </li>

                              <li>
                                <input class="btn btn-submit" type="submit" value="Submit" />
                                <small>or press <strong>enter</strong></small>
                              </li>

                            </ul>
                          </form>
                        </div>
                      </div></div>
                              </div>
                            </div>
                          </div>
                        </div>
<!--            <div class="row">
              <div class="col-xs-12">
                <div class="panel panel-info">
                  <header class="panel-heading">
                    <h3 class="panel-title">Nothing Interesting Here</h3>
                  </header>
                  <section class="panel-body">
                    <p>Put something here, if you want.</p>
                  </section>
                </div>
              </div>
            </div>-->
          </main>
<div class="dotWrapper dotWrapper-1">
    <div class="dot dot-1"></div>
  </div>
  <div class="dotWrapper dotWrapper-2">
    <div class="dot dot-2"></div>
  </div>
  <div class="dotWrapper dotWrapper-3">
    <div class="dot dot-3"></div>
  </div>
  <div class="dotWrapper dotWrapper-4">
    <div class="dot dot-4"></div>
  </div>
  <div class="dotWrapper dotWrapper-5">
    <div class="dot dot-5"></div>
  </div>
  <div class="dotWrapper dotWrapper-6">
    <div class="dot dot-6"></div>
  </div>
  <div class="dotWrapper dotWrapper-7">
    <div class="dot dot-7"></div>
  </div>
  <div class="dotWrapper dotWrapper-8">
    <div class="dot dot-8"></div>
  </div>
  <div class="dotWrapper dotWrapper-9">
    <div class="dot dot-9"></div>
  </div>
  <div class="dotWrapper dotWrapper-10">
    <div class="dot dot-10"></div>
  </div>
  <div class="dotWrapper dotWrapper-11">
    <div class="dot dot-11"></div>
  </div>
  <div class="dotWrapper dotWrapper-12">
    <div class="dot dot-12"></div>
  </div>
  <div class="dotWrapper dotWrapper-13">
    <div class="dot dot-13"></div>
  </div>
  <div class="dotWrapper dotWrapper-14">
    <div class="dot dot-14"></div>
  </div>
  <div class="dotWrapper dotWrapper-15">
    <div class="dot dot-15"></div>
  </div>
  <div class="dotWrapper dotWrapper-16">
    <div class="dot dot-16"></div>
  </div>
  <div class="dotWrapper dotWrapper-17">
    <div class="dot dot-17"></div>
  </div>
  <div class="dotWrapper dotWrapper-18">
    <div class="dot dot-18"></div>
  </div>
  <div class="dotWrapper dotWrapper-19">
    <div class="dot dot-19"></div>
  </div>
  <div class="dotWrapper dotWrapper-20">
    <div class="dot dot-20"></div>
  </div>
  <div class="dotWrapper dotWrapper-21">
    <div class="dot dot-21"></div>
  </div>
  <div class="dotWrapper dotWrapper-22">
    <div class="dot dot-22"></div>
  </div>
  <div class="dotWrapper dotWrapper-23">
    <div class="dot dot-23"></div>
  </div>
  <div class="dotWrapper dotWrapper-24">
    <div class="dot dot-24"></div>
  </div>
  <div class="dotWrapper dotWrapper-25">
    <div class="dot dot-25"></div>
  </div>
  <div class="dotWrapper dotWrapper-26">
    <div class="dot dot-26"></div>
  </div>
  <div class="dotWrapper dotWrapper-27">
    <div class="dot dot-27"></div>
  </div>
  <div class="dotWrapper dotWrapper-28">
    <div class="dot dot-28"></div>
  </div>
  <div class="dotWrapper dotWrapper-29">
    <div class="dot dot-29"></div>
  </div>
  <div class="dotWrapper dotWrapper-30">
    <div class="dot dot-30"></div>
  </div>
  <div class="dotWrapper dotWrapper-31">
    <div class="dot dot-31"></div>
  </div>
  <div class="dotWrapper dotWrapper-32">
    <div class="dot dot-32"></div>
  </div>
  <div class="dotWrapper dotWrapper-33">
    <div class="dot dot-33"></div>
  </div>
  <div class="dotWrapper dotWrapper-34">
    <div class="dot dot-34"></div>
  </div>
  <div class="dotWrapper dotWrapper-35">
    <div class="dot dot-35"></div>
  </div>
  <div class="dotWrapper dotWrapper-36">
    <div class="dot dot-36"></div>
  </div>
  <div class="dotWrapper dotWrapper-37">
    <div class="dot dot-37"></div>
  </div>
  <div class="dotWrapper dotWrapper-38">
    <div class="dot dot-38"></div>
  </div>
  <div class="dotWrapper dotWrapper-39">
    <div class="dot dot-39"></div>
  </div>
  <div class="dotWrapper dotWrapper-40">
    <div class="dot dot-40"></div>
  </div>
  <div class="dotWrapper dotWrapper-41">
    <div class="dot dot-41"></div>
  </div>
  <div class="dotWrapper dotWrapper-42">
    <div class="dot dot-42"></div>
  </div>
  <div class="dotWrapper dotWrapper-43">
    <div class="dot dot-43"></div>
  </div>
  <div class="dotWrapper dotWrapper-44">
    <div class="dot dot-44"></div>
  </div>
  <div class="dotWrapper dotWrapper-45">
    <div class="dot dot-45"></div>
  </div>
  <div class="dotWrapper dotWrapper-46">
    <div class="dot dot-46"></div>
  </div>
  <div class="dotWrapper dotWrapper-47">
    <div class="dot dot-47"></div>
  </div>
  <div class="dotWrapper dotWrapper-48">
    <div class="dot dot-48"></div>
  </div>
  <div class="dotWrapper dotWrapper-49">
    <div class="dot dot-49"></div>
  </div>
  <div class="dotWrapper dotWrapper-50">
    <div class="dot dot-50"></div>
  </div>
  <div class="dotWrapper dotWrapper-51">
    <div class="dot dot-51"></div>
  </div>
  <div class="dotWrapper dotWrapper-52">
    <div class="dot dot-52"></div>
  </div>
  <div class="dotWrapper dotWrapper-53">
    <div class="dot dot-53"></div>
  </div>
  <div class="dotWrapper dotWrapper-54">
    <div class="dot dot-54"></div>
  </div>
  <div class="dotWrapper dotWrapper-55">
    <div class="dot dot-55"></div>
  </div>
  <div class="dotWrapper dotWrapper-56">
    <div class="dot dot-56"></div>
  </div>
  <div class="dotWrapper dotWrapper-57">
    <div class="dot dot-57"></div>
  </div>
  <div class="dotWrapper dotWrapper-58">
    <div class="dot dot-58"></div>
  </div>
  <div class="dotWrapper dotWrapper-59">
    <div class="dot dot-59"></div>
  </div>
  <div class="dotWrapper dotWrapper-60">
    <div class="dot dot-60"></div>
  </div>
  <div class="dotWrapper dotWrapper-61">
    <div class="dot dot-61"></div>
  </div>
  <div class="dotWrapper dotWrapper-62">
    <div class="dot dot-62"></div>
  </div>
  <div class="dotWrapper dotWrapper-63">
    <div class="dot dot-63"></div>
  </div>
  <div class="dotWrapper dotWrapper-64">
    <div class="dot dot-64"></div>
  </div>
  <div class="dotWrapper dotWrapper-65">
    <div class="dot dot-65"></div>
  </div>
  <div class="dotWrapper dotWrapper-66">
    <div class="dot dot-66"></div>
  </div>
  <div class="dotWrapper dotWrapper-67">
    <div class="dot dot-67"></div>
  </div>
  <div class="dotWrapper dotWrapper-68">
    <div class="dot dot-68"></div>
  </div>
  <div class="dotWrapper dotWrapper-69">
    <div class="dot dot-69"></div>
  </div>
  <div class="dotWrapper dotWrapper-70">
    <div class="dot dot-70"></div>
  </div>
  <div class="dotWrapper dotWrapper-71">
    <div class="dot dot-71"></div>
  </div>
  <div class="dotWrapper dotWrapper-72">
    <div class="dot dot-72"></div>
  </div>
  <div class="dotWrapper dotWrapper-73">
    <div class="dot dot-73"></div>
  </div>
  <div class="dotWrapper dotWrapper-74">
    <div class="dot dot-74"></div>
  </div>
  <div class="dotWrapper dotWrapper-75">
    <div class="dot dot-75"></div>
  </div>
</div>

    </body>
    <!--        The Script-->
<script type="text/javascript" src="sidenav.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>