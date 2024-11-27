<div>
    <h1>Welcome to the Update</h1>
        <form action="/update" method="post" enctype="multipart/form-data" >
            @csrf
            <table>
                <tr>
                    <input type="hidden" name="eid" value="{{$employee->eid}}">
                </tr>
                <tr>
                    <td>Name:- </td>
                    <td><input type="text" name="name" value="{{$employee->name}}"></td>
                </tr>
                <tr>
                    <td>Eamil:- </td>
                    <td><input type="email" name="email" value="{{$employee->email}}"></td>
                </tr>
                <tr>
                    <td>Gender:- </td>
                    <td><input type="radio" name="gender" id="" value="male" {{ $employee->gender=="male"? "checked":"" }} >Male &nbsp; 
                        <input type="radio" name="gender" id="" value="female" {{ $employee->gender=="female"? "checked":"" }}>Female</td>
                </tr>
                <tr>
                    <td>City:- </td>
                    <td>
                        <select name="city" id="">
                            <option value="surat" {{ $employee->city=="surat"? "selected":"" }}>Suart</option>
                            <option value="navsari" {{ $employee->city=="navsari"? "selected":"" }}>Navsari</option>
                            <option value="vapi"  {{ $employee->city=="vapi"? "selected":"" }}>Vapi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobby:-</td>
                    <td>
                        @php
                            $arr=explode(",",$employee->hobby);
                        @endphp
                        <input type="checkbox" name="hobby[]" id="" value="cricket" {{in_array("cricket",$arr) ? "checked" : ""}}>Cricket &nbsp;
                        <input type="checkbox" name="hobby[]" id="" value="golf" {{in_array("golf",$arr) ? "checked" : ""}}>Golf &nbsp;
                        <input type="checkbox" name="hobby[]" id="" value="other" {{in_array("other",$arr) ? "checked" : ""}}>Otehr &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>Date Of Birth:-</td>
                    <td><input type="date" name="dob" id="" value="{{$employee->dob}}"></td>
                </tr>
                <tr>
                    <td>Image oF employee</td>
                    <td><input type="file" name="image" id="" accept="image/*"></td>
                </tr>
                <tr>
                    <td><button type="submit">Update</button></td>
                </tr>
            </table>
        </form>
</div>
