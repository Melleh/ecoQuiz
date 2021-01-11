<header>
    <h1>Admin</h1>
    <hr>
</header>

<ul>

<li>
    <a href="create.php"><strong>Create</strong></a> - add a user
</li>

<li>
    <a href="read.php"><strong>Read</strong></a> - find a user
</li>


</ul>

<form method="post" class="col-md-12 g-4 contact-form">
        <div class="row g-4">
            <div class="col-md-6">
                <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="col-md-6">
                <input type="password" class="form-control" placeholder="Password">
            </div>

            <div class="col-md-12">
                <input type="email" class="form-control" placeholder="Email">
            </div>

            <div class="col-12">
                <input type="text" class="form-control" placeholder="Subject">
            </div>

            <div class="col-md-12">
                <textarea class="form-control" name="" id="" cols="30" rows="6" placeholder="Type your message here..."></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
