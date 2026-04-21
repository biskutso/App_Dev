<div>
	ID: {{$student->id}} <br>
	Name: {{$student->fname}} {{$student->mname}} {{$student->lname}} {{$student->sname}} <br>
    Gender: {{$student->gender == 'M' ? 'Male' : 'Female'}} <br>
    Birth Date: {{$student->bdate}} <br>
	Email: {{$student->email}} <br><br>

	<a href="{{ route('home') }}"> Back to Students List </a>
</div>
