<?php


namespace App\Repositories;


use App\Models\old\Reservation;
use Barryvdh\DomPDF\Facade\Pdf;

class ReservationRepository
{
    public function index()
    {
        return Reservation::all();
    }

    public function show($id)
    {
        return Reservation::findOrFail($id);
    }

    public function store($request)
    {

//        dd($request);
        $data = [
            'client_id' => $request->client_id,
//            'country_id' => $request->country_id,
//            'city_id' => $request->city_id,
            'hotel_id' => $request->hotel_id,
            'room_id' => $request->room_id,
            'car_id' => $request->car_id,
        ];
       $reservation = Reservation::create($data);
       dd($reservation);

    }

    public function update($id, $request)
    {

    }

    public function destroy($id)
    {
        Reservation::destroy($id);
    }
    public function generateReservationPdf($reservation)
    {
        $pdf=Pdf::loadView('dashboard.v1.reservation.pdf.reservation');
        return $pdf->setPaper('a4')->download('invoice.pdf');
    }

}
