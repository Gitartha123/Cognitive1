<!--Display General male list -->

<p align="center">Shortlisted Candidates of General (Male)</p>
<table align="center" cellspacing="0" border="1" style="padding: 10px;" width="50%">
    <thead align="center">
        <th>Name</th>
        <th>Roll No:</th>
        <th>Caste</th>
        <th>Marks acquired</th>
        <th>District id</th>
        <th>Height</th>
        <th>DOB</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Allocated District id</th>
    </thead>
    <form method="post" action="{{ route('postdata') }}" id="1">
        {{ csrf_field() }}
        @foreach($candidate_gnm as $candidate)
            <tr align="center">
                <td><input type="text" style="display: none;" value="{{ $candidate->name }}" name="name[]">{{ $candidate->name }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->rollno }}" name="rollno[]">{{ $candidate->rollno }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->caste }}" name="caste[]">{{ $candidate->caste }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->mark }}" name="mark[]">{{ $candidate->mark }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->distid }}" name="distid[]">{{ $candidate->distid }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->height }}" name="height[]">{{ $candidate->height }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->dob }}" name="dob[]">{{ $candidate->dob }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->age }}" name="age[]">{{ $candidate->age }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->gender }}" name="gender[]">{{ $candidate->gender }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->gender }}" name="gender[]">{{ $candidate->allocatedistid }}</td>
                <td><input type="text" style="display: none;" value="1" name="status"></td>
            </tr>
        @endforeach

    </form>
</table>

<!--Display general female list-->

<p align="center">Shortlisted Candidates of General (Female)</p>
<table align="center" cellspacing="0" border="1" style="padding: 10px;" width="50%">
    <thead align="center">
    <th>Name</th>
    <th>Roll No:</th>
    <th>Caste</th>
    <th>Marks acquired</th>
    <th>District id</th>
    <th>Height</th>
    <th>DOB</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Allocated District id</th>
    </thead>
    <form >
        @foreach($candidate_gnf as $candidate)
            <tr align="center">
                <td><input type="text" style="display: none;" value="{{ $candidate->name }}" name="name[]">{{ $candidate->name }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->rollno }}" name="rollno[]">{{ $candidate->rollno }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->caste }}" name="caste[]">{{ $candidate->caste }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->mark }}" name="mark[]">{{ $candidate->mark }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->distid }}" name="distid[]">{{ $candidate->distid }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->height }}" name="height[]">{{ $candidate->height }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->dob }}" name="dob[]">{{ $candidate->dob }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->age }}" name="age[]">{{ $candidate->age }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->gender }}" name="gender[]">{{ $candidate->gender }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->gender }}" name="gender[]">{{ $candidate->allocatedistid }}</td>
            </tr>
        @endforeach

    </form>
</table>

<!--Display OBC male list-->

<p align="center">Shortlisted Candidates of OBC(male)</p>
<table align="center" cellspacing="0" border="1" style="padding: 10px;" width="50%">
    <thead align="center">
    <th>Name</th>
    <th>Roll No:</th>
    <th>Caste</th>
    <th>Marks acquired</th>
    <th>District id</th>
    <th>Height</th>
    <th>DOB</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Allocated District id</th>
    </thead>
    <form >
        @foreach($candidate_obc as $candidate)
    <tr align="center">
        <td><input type="text" style="display: none;" value="{{ $candidate->name }}" name="name[]">{{ $candidate->name }}</td>

                <td><input type="text" style="display: none;" value="{{ $candidate->rollno }}" name="rollno[]">{{ $candidate->rollno }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->caste }}" name="caste[]">{{ $candidate->caste }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->mark }}" name="mark[]">{{ $candidate->mark }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->distid }}" name="distid[]">{{ $candidate->distid }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->height }}" name="height[]">{{ $candidate->height }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->dob }}" name="dob[]">{{ $candidate->dob }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->age }}" name="age[]">{{ $candidate->age }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->gender }}" name="gender[]">{{ $candidate->gender }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->gender }}" name="gender[]">{{ $candidate->allocatedistid }}</td>
            </tr>
        @endforeach

        </form>
    </table>

<!--Display OBC female list-->

<p align="center">Shortlisted Candidates of OBC(female)</p>
<table align="center" cellspacing="0" border="1" style="padding: 10px;" width="50%">
    <thead align="center">
    <th>Name</th>
    <th>Roll No:</th>
    <th>Caste</th>
    <th>Marks acquired</th>
    <th>District id</th>
    <th>Height</th>
    <th>DOB</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Allocated District id</th>
    </thead>
    <form >
        @foreach($candidate_obcf as $candidate)
            <tr align="center">
                <td><input type="text" style="display: none;" value="{{ $candidate->name }}" name="name[]">{{ $candidate->name }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->rollno }}" name="rollno[]">{{ $candidate->rollno }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->caste }}" name="caste[]">{{ $candidate->caste }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->mark }}" name="mark[]">{{ $candidate->mark }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->distid }}" name="distid[]">{{ $candidate->distid }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->height }}" name="height[]">{{ $candidate->height }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->dob }}" name="dob[]">{{ $candidate->dob }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->age }}" name="age[]">{{ $candidate->age }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->gender }}" name="gender[]">{{ $candidate->gender }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->gender }}" name="gender[]">{{ $candidate->allocatedistid }}</td>
            </tr>
        @endforeach

    </form>
</table>

<!--Display ST/SC male list-->

<p align="center">Shortlisted Candidates of ST(male)</p>
<table align="center" cellspacing="0" border="1" style="padding: 10px;" width="50%">
    <thead align="center">
    <th>Name</th>
    <th>Roll No:</th>
    <th>Caste</th>
    <th>Marks acquired</th>
    <th>District id</th>
    <th>Height</th>
    <th>DOB</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Allocated District id</th>
    </thead>
    <form >
        @foreach($candidate_st as $candidate)
            <tr align="center">
                <td><input type="text" style="display: none;" value="{{ $candidate->name }}" name="name[]">{{ $candidate->name }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->rollno }}" name="rollno[]">{{ $candidate->rollno }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->caste }}" name="caste[]">{{ $candidate->caste }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->mark }}" name="mark[]">{{ $candidate->mark }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->distid }}" name="distid[]">{{ $candidate->distid }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->height }}" name="height[]">{{ $candidate->height }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->dob }}" name="dob[]">{{ $candidate->dob }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->age }}" name="age[]">{{ $candidate->age }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->gender }}" name="gender[]">{{ $candidate->gender }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->gender }}" name="gender[]">{{ $candidate->allocatedistid }}</td>
            </tr>
        @endforeach

    </form>
</table>

<!--Display ST/SC female list-->

<p align="center">Shortlisted Candidates of ST(female)</p>
<table align="center" cellspacing="0" border="1" style="padding: 10px;" width="50%">
    <thead align="center">
    <th>Name</th>
    <th>Roll No:</th>
    <th>Caste</th>
    <th>Marks acquired</th>
    <th>District id</th>
    <th>Height</th>
    <th>DOB</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Allocated District id</th>
    </thead>
    <form >
        @foreach($candidate_stf as $candidate)
            <tr align="center">
                <td><input type="text" style="display: none;" value="{{ $candidate->name }}" name="name[]">{{ $candidate->name }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->rollno }}" name="rollno[]">{{ $candidate->rollno }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->caste }}" name="caste[]">{{ $candidate->caste }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->mark }}" name="mark[]">{{ $candidate->mark }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->distid }}" name="distid[]">{{ $candidate->distid }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->height }}" name="height[]">{{ $candidate->height }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->dob }}" name="dob[]">{{ $candidate->dob }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->age }}" name="age[]">{{ $candidate->age }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->gender }}" name="gender[]">{{ $candidate->gender }}</td>
                <td><input type="text" style="display: none;" value="{{ $candidate->gender }}" name="gender[]">{{ $candidate->allocatedistid }}</td>
            </tr>
        @endforeach

    </form>
</table>
