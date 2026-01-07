<form action="{{ route('verifyotp') }}" method="post">
    @csrf
    <div>
        <label class="font-semibold" for="otp"><i class="fas fa-lock mr-2" style="margin-right: 5px;"></i> OTP</label>
        <br>
        <input id="otp" style="padding: 5px 40px; margin-bottom:10px" type="text" name="otp" class="form-control rounded-full mt-0 @error('otp') is-invalid @enderror" placeholder="Enter OTP" required>
        @error('otp') 
        <div class="invalid-feedback mb-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" style="margin-top:10px; margin-bottom:10px; display: inline-block; padding: 10px 22px; font-weight: bold; font-size: 14px; color: #fff; border-radius: 9999px; width:250px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff';">Verify OTP</button>
</form>
