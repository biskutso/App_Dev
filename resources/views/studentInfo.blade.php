<div>
	ID: {{$student->id}} <br>
	Name: {{$student->fname}} {{$student->mname}} {{$student->lname}} {{$student->sname}} <br>
    Gender: {{$student->gender}} <br>
    Birth Date: {{$student->bdate}} <br>
	Email: {{$student->email}} <br>

	<a href=" {{ route('home') }}"> Back to students List </a>
</div>
