@extends('layouts.default') @section('content')
<h1>About the Charles T. King Student Loan Fund</h1>
<div class="row">
    <div class="col-md-12">
        <h2>General Info</h2>
        <div>
            <p>The Charles T. King Student Loan fund provides interest-free loans to Millburn Township residents who wish to pursue a course sof study in any college, university, specialized career training school, or post-graduate program (as approved by
                the Student Loan Fund Board) and who might otherwise be financially unable to realize their goals.
            </p>
        </div>
        <div>
            <p>
                The Fund began in 1931 and was renamed in 1974 to honor Dr. King, a former superintendent of schools. Since its inception, over 675 township students have been assisted by the Fund.
            </p>
        </div>
        <h2>Applying for a loan</h2>
        <div>
            <p>Head over to our <a href="{{route('apply') }}">Apply for a Loan</a> page to get more information.</p>
        </div>
    </div>
</div>
@stop
