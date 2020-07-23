<?php include 'inc/header.php';?>
    <h2 class="page-header">Create Job Listing</h2>
    <form method="POST" action="create.php">
    <div class="form-group">
        <label>Company</label>
        <input type="text" class="form-control" name="company" required>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category">
        <option value="0">Select Category</option>
        <?php foreach($categories as $category):?>
            <option value="<?php echo $category->id;?>" required><?php echo $category->name;?></option>
        <?php endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <label>Job Title</label>
        <input type="text" class="form-control" name="job_title" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label>Location</label>
        <input type="text" class="form-control" name="location" required>
    </div>
    <div class="form-group">
        <label>Salary</label>
        <input type="text" class="form-control" name="salary" required>
    </div>
    <div class="form-group">
        <label>Contact User</label>
        <input type="text" class="form-control" name="contact_user" required>
    </div>
    <div class="form-group">
        <label>Contact Email</label>
        <input type="text" class="form-control" name="contact_email" required>
    </div>
    <div class="well">
    <input type="submit" class="btn btn-primary" value="Submit" name="submit" required>
    </div>
    </form>
<?php include 'inc/footer.php';?>