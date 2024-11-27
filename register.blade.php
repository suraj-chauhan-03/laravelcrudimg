<div>
    <h1>Welcome to the register</h1>
    <pre>
        @php
        print_r($errors->all());
        @endphp
    </pre>
        <form action="/store" method="post" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <td>Name:- </td>
                    <td><input type="text" name="name" value="{{old('name')}}"></td>
                    <td><span class="text-denger">@error('name'){{$message}}@enderror</span></td>
                </tr>
                <tr>
                    <td>Eamil:- </td>
                    <td><input type="email" name="email" value="{{old('email')}}"></td>
                    <td><span class="text-denger">@error('email'){{$message}}@enderror</span></td>

                </tr>
                <tr>
                    <td>Gender:- </td>
                    <td><input type="radio" name="gender" id="" value="male" value="{{old('gender')}}">Male &nbsp; 
                        <input type="radio" name="gender" id="" value="female" value="{{old('gender')}}">Female</td>
                    <td><span class="text-denger">@error('gender'){{$message}}@enderror</span></td>

                </tr>
                <tr>
                    <td>City:- </td>
                    <td>
                        <select name="city" id="" value="{{old('city')}}">
                            <option value="">Select One</option>
                            <option value="surat">Suart</option>
                            <option value="navsari">Navsari</option>
                            <option value="vapi">Vapi</option>
                        </select>
                    </td>
                    <td><span class="text-denger">@error('city'){{$message}}@enderror</span></td>

                </tr>
                <tr>
                    <td>Hobby:-</td>
                    <td>
                        <input type="checkbox" name="hobby[]" id="" value="cricket" value="{{old('hobby')}}">Cricket &nbsp;
                        <input type="checkbox" name="hobby[]" id="" value="golf" value="{{old('hobby')}}">Golf &nbsp;
                        <input type="checkbox" name="hobby[]" id="" value="other" value="{{old('hobby')}}">Otehr &nbsp;
                    </td>
                    <td><span class="text-denger">@error('hobby'){{$message}}@enderror</span></td>

                </tr>
                <tr>
                    <td>Date Of Birth:-</td>
                    <td><input type="date" name="dob" id="" value="{{old('dob')}}"></td>
                    <td><span class="text-denger">@error('dob'){{$message}}@enderror</span></td>
                </tr>
                <tr>
                    <td>Image oF employee</td>
                    <td><input type="file" name="image" id="" accept="image/*" value="{{old('image')}}"></td>
                    <td><span class="text-denger">@error('image'){{$message}}@enderror</span></td>

                </tr>
                <tr>
                    <td><button type="submit">Register</button></td>
                </tr>
            </table>
        </form>
</div>
