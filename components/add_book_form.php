<form>
  <div class="mb-3">
    <label for="title" class="form-label">Book Name</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="book_title">
    <div id="book_title" class="form-text">Full Name of the Book</div>
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">Book Author</label>
    <input type="text" class="form-control" id="author" name="author" aria-describedby="book_author">
    <div id="book_author" class="form-text">Full Name of the Book</div>
  </div>
  <div class="mb-3">
    <label for="pages" class="form-label">Pages</label>
    <input type="number" class="form-control" id="pages" name="pages" aria-describedby="book_author">
    <div id="book_author" class="form-text">Number of pages in the book</div>
  </div>  
  <button type="submit" id="form_post_book" class="btn btn-primary">Save</button>
</form>
<!-- <script>
	document.getElementById('title').value = "Harry Porter";
	document.getElementById('author').value = "J.K Rowling";
	document.getElementById('pages').value = 3450;
	</script> -->

<script>
const form_post_book = document.getElementById('form_post_book');
form_post_book.addEventListener('click', (e)=>{
	e.preventDefault();
	const title = document.getElementById('title').value;
	const author = document.getElementById('author').value;
	const pages = document.getElementById('pages').value;

	const xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function() 
	{
		if(this.readyState == 4 && this.status == 200)
		{
			console.log(this.response);
		} 
	}

	xhr.open("POST", "http://raw-ajax.test/components/book_form_ajax.php", true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send(`title=${title}&author=${author}&pages=${pages}`);
})
</script>