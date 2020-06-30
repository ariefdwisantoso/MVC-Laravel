<h1>Form Account Baru!</h1>
<h2>Sign Up Form</h2>
<form action="/welcome" method="post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        <div><ul><label>First name:</label><br/>
        <input type="text" name="namaDepan">
        </ul></div>
        <div><ul><label>Last name:</label><br/>
        <input type="text" name="namaBelakang">
        </ul></div>
        <div><ul><label>Gender:</label><br/>
        <input type='radio'/>Male<br/>
        <input type='radio'/>Female<br/>
        <input type='radio'/>Other
        </ul></div>
        <div><ul><label>Nationaly:</label><br/>
        <select name='agama'>
            <option>Indonesian</option>
            <option>English</option>
            <option>Other</option>
        </select>
        </ul></div>
        <div><ul><label>Language Spoken:</label><br/>
        <input type='checkbox'/>Indonesian<br/>
        <input type='checkbox'/>English<br/>
        <input type='checkbox'/>Other<br/>
        </ul></div>
        <div><ul><label>Bio:</label><br/>
        <textarea style="resize:none;width:300px;height:100px;"></textarea><br/>
        <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        <a href="{{ url('/') }}" class="btn btn-lg">Batal</a>
        </ul></div>
</form>