                            <div>
                                @if(empty($filename))
                                <img src="{{ asset('images/no-image.png')  }}">
                                @else
                                <img src="{{ asset('storage/shops/' . $filename) }}">
                                @endif
                            </div>
