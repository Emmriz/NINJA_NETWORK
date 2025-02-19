<x-layout>

    <h1>REGISTER</h1>

    <form action="{{ route('register')}}" method="POST">
        @csrf
      
        <h2>Register for an Account</h2>
      
        <label for="name"><b>Name:</b></label>
        <input 
          type="text"
          name="name"
          required
          value="{{ old ('name')}}"
        >

        <label for="email"><b>Email:</b></label>
        <input 
          type="email"
          name="email"
          required
          value="{{ old ('email')}}"
        >
      
        <label for="password"><b>Password:</b></label>
        <input 
          type="password"
          name="password"
          required
        >

        <label for="password_confirmation"><b>Confirm Password:</b></label>
        <input 
          type="password"
          name="password_confirmation"
          required
        >
      
        <button type="submit" class="btn mt-4">Register</button>
      
        <!-- validation errors -->
        
      </form>

</x-layout>