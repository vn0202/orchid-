<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Quill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Orchid\Support\Facades\Alert;

class EmailSenderScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Email';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Send Message')
                ->icon('paper-plane')
                ->method('sendMessage')
        ];
    }

    /**
     * View.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {

             return [
                 Layout::rows([
                     Input::make('subject')
                         ->title('Subject')
                         ->required()
                         ->placeholder('Message subject line')
                         ->help('Enter the subject line for your message'),

//                     Relation::make('users.')
//                         ->title('Recipients')
//                         ->multiple()
//                         ->required()
//                         ->placeholder('Email addresses')
//                         ->help('Enter the users that you would like to send this message to.')
//                         ->fromModel(User::class,'name','email'),

                     Input::make('users')
                         ->title('Email address')
                         ->required()
                         ->placeholder('Message subject line')
                         ->help('Enter the subject line for your message'),

                     Quill::make('content')
                         ->title('Content')
                         ->required()
                         ->placeholder('Insert text here ...')
                         ->help('Add the content for the message that you would like to send.')


                 ])
        ];
    }
    public function description(): ?string
    {
        return "Tool that sends ad-hoc email messages.";
    }
    public function sendMessage(Request $request)
    {
        $request->validate([
            'subject' => 'required|min:6|max:50',
            'users'   => 'required',
            'content' => 'required|min:10'
        ]);

        Mail::raw($request->get('content'), function (Message $message) use ($request) {
            $message->from('nghiavuxp0202@gmail.com');
            $message->subject($request->get('subject'));
            $email = $request->get('users');
//            foreach ($request->get('users') as $email) {
                $message->to($email);
//            }
        });


        Alert::info('Your email message has been sent successfully.');
    }

}
