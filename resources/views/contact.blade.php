@extends('layouts.app')
@section('content')
    <div class="container">
        <h6>contact page </h6>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="John Doe"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name='email'
                            placeholder="email@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="details" rows="5" placeholder="Write your message here..."
                            required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>

    </div>
@endsection
