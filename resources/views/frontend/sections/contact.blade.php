<section class="contact-area section-padding" id="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{!! $contactSectionSetting->title !!}</h3>
                    <div class="desc">
                        <p>{!! $contactSectionSetting->sub_title !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Contact-Form -->
                <form action="{{route('admin.hero.update', 1)}}" method="POST" enctype="multipart/form-data" class="contact-form" id="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="name" id="name" class="input-box" placeholder="Name">
                                <label for="name" class="icon lb-name"><i class="fal fa-user"></i></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="email" id="email" class="input-box" placeholder="Email">
                                <label for="email" class="icon lb-email"><i class="fal fa-envelope"></i></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="subject" id="subject" class="input-box" placeholder="Subject">
                                <label for="subject" class="icon lb-subject"><i class="fal fa-check-square"></i></label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-box">
                                <textarea class="input-box" id="message" placeholder="Message" cols="30" rows="4" name="message"></textarea>
                                <label for="message" class="icon lb-message"><i class="fal fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-box">
                                <button class="button-primary mouse-dir" id="send-btn" type="submit">Send Now <span class="dir-part"></span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Contact-Form / -->
            </div>
        </div>
    </div>
</section>
@push('scripts')
    <script>
        $(document).ready(function () {            
            $(document).on('submit', '#contact-form', function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "{{route('frontend.contact')}}",
                    data: $(this).serialize(),
                    beforeSend: function (res) {
                        $('#send-btn').prop("disabled", true);
                        $('#send-btn').text("Loading...");
                    },
                    success: function (response) {
                        if (response.status == 'success') {
                            toastr.success(response.message);
                        }
                        $('#contact-form').trigger('reset');
                        $('#send-btn').prop("disabled", false);
                        $('#send-btn').text("Send Now");
                    },
                    error: function (response) {
                        if (response.status == 422) {
                            let errorMessages = $.parseJSON(response.responseText);
                            $.each(errorMessages.errors, function (indexInArray, valueOfElement) { 
                                 toastr.error(valueOfElement[0]);
                            });
                            $('#send-btn').prop("disabled", false);
                            $('#send-btn').text("Send Now");
                        }
                    },
                });
            });
        });
    </script>
@endpush