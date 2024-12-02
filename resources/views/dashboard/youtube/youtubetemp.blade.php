<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="accordion" id="accordionExample">
    @foreach($groupedData as $year => $months)
        <!-- Year heading -->
        <h2 class="mt-4">{{ $year }}</h2>
        
        @foreach($months as $month => $data)
            <div class="accordion-item">
                <!-- Month as accordion button -->
                <h2 class="accordion-header" id="heading{{ $year }}{{ $month }}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $year }}{{ $month }}" aria-expanded="false" aria-controls="collapse{{ $year }}{{ $month }}">
                        {{ date('F', mktime(0, 0, 0, $month, 10)) }} <!-- Displays the month name (e.g., January) -->
                    </button>
                </h2>
                <!-- Accordion body: Display data for that month -->
                <div id="collapse{{ $year }}{{ $month }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $year }}{{ $month }}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            @foreach($data as $item)
                                <li>
                                    <strong>Title:</strong> {{ $item->title }} <br>
                                    <strong>Subtitle:</strong> {{ $item->subtitle }} <br>
                                    <strong>Date:</strong> {{ $item->date }} <br>
                                    <!-- Add more data fields as needed -->
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>