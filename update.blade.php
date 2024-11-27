<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
     <h1>update page</h1>
    
    
    <form action="/storeupdate" method="post">
        @csrf
     <table>
        <input type="hidden" name="eid" id="" value="{{$updatedata->eid}}">
            <tr>

                <td>Name :-</td>
                <td><input type="text" name="name" id="" value="{{$updatedata->name}}"></td>
            </tr>
            <tr>

                <td>email :-</td>
                <td><input type="text" name="email" id="" value="{{$updatedata->email}}" ></td>
            </tr>
            <tr>

                <td>gender :-</td>
                <td><input type="radio" name="gender" id="" value="male" {{$updatedata->gender=="male"?'checked':''}} >Male
                <input type="radio" name="gender" id="" value="female" {{ $updatedata->gender=="female"?'checked':'' }}>Female</td>

            </tr>
            <tr>

                <td>city :-</td>
                <td><select name="city" id="" >
                    <option value="surat" {{$updatedata->city=="surat"?'selected':''}}>surat</option>
                    <option value="ahm" {{$updatedata->city=="ahm"?'selected':''}}>Ahm</option>
                    <option value="ank" {{$updatedata->city=="ank"?'selected':''}}>ank</option>
                    <option value="valsad">valsad</option>
                </select></td>
            </tr>
            <tr>

                @php
                $arr = explode(",",$updatedata->hobby);
                @endphp
                <td>hobby :-</td>
                <td><input type="checkbox" name="hobby[]" id="" value="volleyball" {{in_array("volleyball",$arr)?'checked':''}}>volleyball
                <input type="checkbox" name="hobby[]" id="" value="cricket"{{in_array("cricket",$arr)?'checked':''}}>cricket
                <input type="checkbox" name="hobby[]" id="" value="batminton" {{in_array("batminton",$arr)?'checked':''}}>batminton</td>

            </tr>
            <tr>

                <td>dob :-</td>
                <td><input type="date" name="dob" id="" value="{{$updatedata->dob}}"></td>
            </tr>
            <tr>

                
                <td><button type="submit" >Update</button></td>
                <td>
                
                </td>
            </tr>
        </table>
        </form>
</div>
