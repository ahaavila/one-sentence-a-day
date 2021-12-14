import Head from 'next/head'
import Image from 'next/image'
import '../styles/Home.module.css'
import React, { useState } from 'react';
import { init } from 'emailjs-com';
import axios from 'axios';

import { Botao, Container, Foto, H2, Input, Logo, Texto } from '../styles/homeStyle';

init("user_YWHRL5p0UldXqQkZxq8QE");

export default function Home() {
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [message, setMessage] = useState('');
  const [isSending, setIsSending] = useState(false);

  const sendMail = async() => {
    setIsSending(true);
    try {
      await axios.post('https://api.emailjs.com/api/v1.0/email/send', {
        user_id: 'user_YWHRL5p0UldXqQkZxq8QE',
        service_id: 'service_gxkb4se',
        template_id: 'template_84us92r',
        template_params: {
          name,
          email
        }
      });

      const response = await axios.post('https://one-sentence-a-day.vercel.app/api/user', {
        nome: name,
        email
      });
      console.log('response', response);

      setMessage('Email enviado com sucesso!');
    } catch (err) {
      console.error(err);
      setMessage('Falha ao enviar o email');
    } finally {
      setIsSending(false);
    }
  }

  return (
    <div className="container" style={{ marginTop: '20px' }}>
      <div className="row">
        <div className="col-lg-6 col-12 logo-col">
          <img className="logo" src="./images/logo.png" alt="Logo" />
        </div>
        <div className="col-lg-6 col-12">
          <div className="embed-responsive embed-responsive-16by9">
            <iframe className="embed-responsive-item" src="https://www.youtube.com/embed/nqi6a6y40S4" webkitallowfullscreen="1" mozallowfullscreen="1" allowFullScreen="1" frameBorder="0" width="600px" height="360px"></iframe>
          </div>
        </div>
      </div>

      <div className="row">
        <div className="col-lg-6 col-12">
          <Texto className="texto" style={{ backgroundColor: 'midnightblue', width: '80%', margin: '3rem auto', textAlign: 'center', height: 'max-content', borderRadius: '2em' }}>
            <H2 className="h2" style={{ color: '#fff', marginBottom: '2.5em', textAlign: 'center', padding: '1em' }}>
              Dê um up no seu inglês
              praticando as 60 frases 
              deste ebook, usadas 
              diarimente pelos nativos.
            </H2>
          </Texto>
          <form className="form-group" method="POST" >
            <Input onChange={e => setName(e.target.value)} className="form-control" style={{ height: '4em', borderRadius: '1em' }} type="text" name="text_nome" id="text_nome" placeholder="Coloque seu nome" required /><br />

            <Input onChange={e => setEmail(e.target.value)} className="form-control" style={{ height: '4em', borderRadius: '1em' }} type="email" name="text_email" id="text_email" placeholder="Digite aqui seu melhor email" required /><br /><br />

            <Botao type="button" onClick={() => sendMail()} style={{ height: '4em', borderRadius: '1em', cursor: 'pointer' }} className="botao btn-lg btn-block" >
              {isSending ? 'ENVIANDO EMAIL...' : 'QUERO RECEBER!'}
            </Botao>
            {message && 
              (
                <p style={{ color: 'red', fontWeight: 'bold', backgroundColor: 'white', marginTop: '1rem', height: '2rem' }}>{message}</p>
              )
            }
          </form>
        </div>
        <div className="col-lg-6 col-12">
          <Foto className="foto" src="./images/foto.png" alt="Foto Lorena Brandão" />
        </div>
      </div>
    </div>
  )
}
