<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscription;
use App\Mail\SubscriptionMail;
use App\Mail\ChristmasMail;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $subscription = new Subscription;
        $subscription->email = $request->email;
        $subscription->state = 1;
        $subscription->save();

        $this->sendEmail($subscription->email);

        return $subscription;
    }

    public function subscription(Request $request){

        $request->validate([
            'email' => 'required|unique:subscriptions,email',
        ]);

        $subscriptor = new subscription;
        $subscriptor->email = $request->email;
        $subscriptor->state = 1;
        $subscriptor->save();

        $this->sendEmail($subscriptor->email);

        return redirect()->back()->with('success_message','Gracias por suscribirte a nuestro boletín, te enviaremos un mensaje al correo ingresado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function sendEmail($email){
        $details=[
            'title' => 'Bienvenido al Boletín de El León Verde',
            'body' => 'Por este medio quiero mantenerte al tanto del nuevo contenido que vaya generando. 
            Nuevos Artículos, Historias y Especialmente los videos que subimos a YouTube para que no te pierdas ninguno.'
        ];

        Mail::to($email)->send(new SubscriptionMail($details));
        return 'Correo enviado';

    }

public function sendEmailChristmas(){

        $subscriptions = Subscription::where('state','1')->get();

        // $details=[
        //     'title' => 'Que los reencuentros sean dulces, las risas abundantes y el amor entre nosotros inmenso, en esta Navidad',
        //     'body' => 'Por este medio quiero mantenerte al tanto del nuevo contenido que vaya generando. 
        //     Nuevos Artículos, Historias y Especialmente los videos que subimos a YouTube para que no te pierdas ninguno.'
        // ];

        foreach($subscriptions as $subscriptor){
            Mail::to($subscriptor->email)->send(new ChristmasMail());
        }
    return 'Correo enviado';

}

}
