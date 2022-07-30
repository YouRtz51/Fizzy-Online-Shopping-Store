<?php include 'header.php'; ?>
<!--  Modal -->
<?php include'modal.php'; ?>
<div class="container py-5">
  <h1>Bootstrap(ious) 4 Boilerplate</h1>
  <p>This is a sample content.</p>
  <div class="jumbotron">
    <h1>Kitchen Sink</h1>
    <p>A quick preview of everything Bootstrap has to offer.</p>
    <p><a class="btn btn-primary btn-large" href="#">Learn more »</a> <a class="btn btn-outline-primary btn-large" href="#">Learn more »</a></p>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <div class="mb-4 card" id="headings">
        <div class="card-header">Headings</div>
        <div class="card-body">
          <h1 class="page-header">Page Header<small>With Small Text</small></h1>
          <h1>This is an h1 heading</h1>
          <h2>This is an h2 heading</h2>
          <h3>This is an h3 heading</h3>
          <h4>This is an h4 heading</h4>
          <h5>This is an h5 heading</h5>
          <h6>This is an h6 heading</h6>
        </div>
      </div>
      <div class="mb-4 card" id="tables">
        <div class="card-header">Tables</div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Tables</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Michael</td>
                <td>Are formatted like this</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Lucille</td>
                <td>Do you like them?</td>
              </tr>
              <tr class="success">
                <td>3</td>
                <td>Success</td>
                <td></td>
              </tr>
              <tr class="danger">
                <td>4</td>
                <td>Danger</td>
                <td></td>
              </tr>
              <tr class="warning">
                <td>5</td>
                <td>Warning</td>
                <td></td>
              </tr>
              <tr class="active">
                <td>6</td>
                <td>Active</td>
                <td></td>
              </tr>
            </tbody>
          </table>
          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Tables</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Michael</td>
                <td>This one is bordered and condensed</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Lucille</td>
                <td>Do you still like it?</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="mb-4 card" id="content-formatting">
        <div class="card-header">Content Formatting</div>
        <div class="card-body">
          <p class="lead">This is a lead paragraph.</p>
          <p>This is an <b>ordinary paragraph</b> that is <i>long enough</i> to wrap to
            <u>multiple lines</u> so that you can see how the line spacing looks.
          </p>
          <p class="text-muted">Muted color paragraph.</p>
          <p class="text-warning">Warning color paragraph.</p>
          <p class="text-danger">Danger color paragraph.</p>
          <p class="text-info">Info color paragraph.</p>
          <p class="text-primary">Primary color paragraph.</p>
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled"><span class="page-link">Previous</span></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active"><span class="page-link">2<span class="sr-only">(current)</span></span></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
          <p><small>This is text in a <code>small</code> wrapper. <abbr title="No Big Deal">NBD</abbr>, right?</small></p>
          <hr>
          <address><strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br><abbr title="Phone">P:</abbr> (123) 456-7890</address>
          <address class="col-6"><strong>Full Name</strong><br><a href="mailto:#">first.last@example.com</a></address>
          <hr>
          <blockquote>Here's what a blockquote looks like in Bootstrap.<small>Use <code>small</code> to identify the source.</small></blockquote>
          <hr>
          <div class="row">
            <div class="col-xs-6">
              <ul>
                <li>Normal Unordered List</li>
                <li>Can Also Work
                  <ul>
                    <li>With Nested Children</li>
                  </ul>
                </li>
                <li>Adds Bullets to Page</li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ol>
                <li>Normal Ordered List</li>
                <li>Can Also Work
                  <ol>
                    <li>With Nested Children</li>
                  </ol>
                </li>
                <li>Adds Bullets to Page</li>
              </ol>
            </div>
          </div>
          <hr>
          <pre>\nfunction preFormatting() {  // looks like this;  var something = somethingElse;  return true;}                        </pre>
        </div>
      </div>
    </div>
  </div>
  <div class="mb-4 card" id="forms">
    <div class="card-header">Forms</div>
    <div class="card-body">
      <form>
        <fieldset>
          <legend>Legend</legend>
          <div class="form-group">
            <label for="exampleInputEmail">Email address</label>
            <input class="form-control" id="exampleInputEmail" type="text" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input class="form-control" id="exampleInputPassword" type="password" placeholder="Password">
          </div>
          <div class="form-check form-group">
            <input class="form-check-input" id="checkbox-1" type="checkbox">
            <label class="form-check-label" for="checkbox-1">Check me out</label>
          </div>
          <button class="btn btn-primary" type="submit">Submit</button>
        </fieldset>
      </form>
      <hr class="my-5">
      <form class="form-inline">
        <input class="mb-2 form-control mr-sm-2" type="text" placeholder="Email">
        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
        <div class="mb-2 input-group mr-sm-2">
          <div class="input-group-prepend">
            <div class="input-group-text">@</div>
          </div>
          <input class="form-control" id="inlineFormInputGroupUsername2" type="text">
        </div>
        <div class="mb-2 form-check mr-sm-2">
          <input class="form-check-input" id="inlineFormCheck" type="checkbox">
          <label class="form-check-label" for="inlineFormCheck">Remember me</label>
        </div>
        <button class="mb-2 btn btn-primary" type="submit">Submit</button>
      </form>
      <hr class="my-5">
      <h4 class="mb-5">Horizontal form</h4>
      <form>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="inputEmail3">Email</label>
          <div class="col-sm-10">
            <input class="form-control" id="inputEmail3" type="email" placeholder="Email">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="inputPassword3">Password</label>
          <div class="col-sm-10">
            <input class="form-control" id="inputPassword3" type="password" placeholder="Password">
          </div>
        </div>
        <fieldset class="form-group">
          <div class="row">
            <legend class="pt-0 col-form-label col-sm-2">Radios</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" id="gridRadios1" type="radio" name="gridRadios" value="option1" checked="">
                <label class="form-check-label" for="gridRadios1">First radio</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" id="gridRadios2" type="radio" name="gridRadios" value="option2">
                <label class="form-check-label" for="gridRadios2">Second radio</label>
              </div>
              <div class="form-check disabled">
                <input class="form-check-input" id="gridRadios3" type="radio" name="gridRadios" value="option3" disabled="">
                <label class="form-check-label" for="gridRadios3">Third disabled radio</label>
              </div>
            </div>
          </div>
        </fieldset>
        <div class="form-group row">
          <div class="col-sm-2">Checkbox</div>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" id="gridCheck1" type="checkbox">
              <label class="form-check-label" for="gridCheck1">Example checkbox</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">Custom Checkbox</div>
          <div class="col-sm-10">
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" id="customCheck1" type="checkbox">
              <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">Custom Radio</div>
          <div class="col-sm-10">
            <div class="custom-control custom-radio">
              <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
              <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
              <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button class="btn btn-primary" type="submit">Sign in</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="mb-4 card" id="buttons">
    <div class="card-header">Buttons</div>
    <div class="card-body">
      <p>
        <button class="btn btn-lg btn-secondary" type="button">Default Lg</button>
        <button class="btn btn-lg btn-primary" type="button">Primary</button>
        <button class="btn btn-lg btn-success" type="button">Success</button>
        <button class="btn btn-lg btn-info" type="button">Info</button>
        <button class="btn btn-lg btn-warning" type="button">Warning</button>
        <button class="btn btn-lg btn-danger" type="button">Danger</button>
        <button class="btn btn-lg btn-link" type="button">Link</button>
      </p>
      <p>
        <button class="btn btn-secondary" type="button">Default </button>
        <button class="btn btn-primary" type="button">Primary</button>
        <button class="btn btn-success" type="button">Success</button>
        <button class="btn btn-info" type="button">Info</button>
        <button class="btn btn-warning" type="button">Warning</button>
        <button class="btn btn-danger" type="button">Danger</button>
        <button class="btn btn-link" type="button">Link</button>
      </p>
      <p>
        <button class="btn btn-sm btn-secondary" type="button">Default Sm</button>
        <button class="btn btn-sm btn-primary" type="button">Primary</button>
        <button class="btn btn-sm btn-success" type="button">Success</button>
        <button class="btn btn-sm btn-info" type="button">Info</button>
        <button class="btn btn-sm btn-warning" type="button">Warning</button>
        <button class="btn btn-sm btn-danger" type="button">Danger</button>
        <button class="btn btn-sm btn-link" type="button">Link</button>
      </p>
    </div>
  </div>
  <div class="card">
    <div class="card-header">Button dropdown</div>
    <div class="card-body">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown button</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>