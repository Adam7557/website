@extends('layouts.default')

@section('content')
<h1>Apply for a Charles T. King Loan</h1>
<div class="row">
<div class="col-md-8">
    <h2>General Info</h2>
    <ol>
        <li>Applicant must be a Millburn Township resident.</li>
        <li>Loan amount is up to a maximum of $4000 per year for up to four years. </li>
        <li>Loans are need-based and currently interest free.</li>
        <li>Application AND a completed current Financial Aid Form (MESA) must be submitted by May 10th, 2015 to be considered for a loan beginning in 2015 Fall School Year.</li>
        <li>All decisions for loans beginning in the 2015 Fall School Year will be made before June 30th, 2015. If a loan is granted to an applicant, the Treasurer of the Fund will inform the applicant.</li>
        <li>Borrower must request loan from the Treasurer for each successive year after initial approval.</li>
        <li>Loans are to be used for tuition only. For each semester, the Treasurer will give borrower a check for the loan amount, made payable to the Treasurer of the College at which the applicant is attending. A note will be drawn up at that time to be signed by all co-borrowers.</li>
        <li>The Borrower must notify the Fund of his/her graduation or withdrawal from college. At such time, the Treasurer will confirm the schedule for repayment of the loan.</li>
        <li>Terms of loan repayment: 
            <ul>
                <li>No payments required for the first six months after graduation or withdrawal from college.</li>
                <li>Payments to begin thereafter on a quarterly basis.</li>
                <li>Payments shall be computed by calculating the "total amount borrowed" divided by the "number of years the loan was received" to obtain the "average yearly amount borrowed." The "average yearly amount borrowed" will then be divided by four to determine the "quarterly payment". Quarterly payments shall be due for the same number of years the loan was received. (i.e. $4000 borrowed for each of 4 years for a total amount borrowed of $16,000. $16,000 divided by 4=$4000. $4000 divided by 4=51000 due per quarter for 4 years.)</li>
            </ul>
        </li>
    </ol>
</div>
<div class="col-md-4 sidebar">
    <h2 class=title>Documents</h3>
    <ul>
        <li>
            <a href=" {{asset('documents/Application.pdf') }}">Loan Application</a>
        </li>
    </ul>
    
</div>
-</div>
@stop