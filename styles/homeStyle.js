import styled from 'styled-components';

export const Container = styled.div`
  margin-top: 20px;

  @media (max-width: 575.98px) {
    background-size: cover;
		background-attachment: fixed;
  }

  @media (min-width: 576px) and (max-width: 767.98px) {
		background-size: cover;
		background-attachment: fixed;
  }
`;

export const Texto = styled.div`
  background-color: midnightblue;
	width: 80%;
  margin: 3rem auto;
	text-align: center;
	height: max-content;
	border-radius: 2em;
`;

export const H2 = styled.h2`
  color: #fff;
	margin-bottom: 2.5em;
	text-align: center;
	padding: 1em;

  @media (max-width: 575.98px) {
    text-align: center;
		font-size: x-large;
  }

  @media (min-width: 576px) and (max-width: 767.98px) {
		color: black;
		margin-bottom: 2.5em;
		text-align: justify;
		font-weight: bold;
		padding: 1em;
  }
`;

export const Botao = styled.button`
  background-color: #eb2409;
	color: #fff;
	font-weight: bold;
	font-size: 1.5em;
  width: 100%;

  &:hover {
    background-color: #a01604;
  }
`;

export const Logo = styled.button`
  width: 20em;
	margin-top: 2em;

  @media (max-width: 575.98px) {
    margin-top: 0;
  }

  @media (min-width: 576px) and (max-width: 767.98px) {
    margin-top: 0;
  }

  @media (min-width: 768px) and (max-width: 991.98px) {
    margin-top: 0;
  }
`;

export const Input = styled.input`
  
  &:focus {
    border: solid 0.3em red;
	  font-weight: bold;
  }
`;

export const Foto = styled.img`
  width: 25em;
  margin-top: 3rem;

  @media (max-width: 575.98px) {
    width: 15em;
  }

  @media (min-width: 576px) and (max-width: 767.98px) {
    width: 15em;
  }
`;

export const Rodape = styled.div`
  background-color: #fff;
	width: 100%;
	text-align: center;
	margin-bottom: 0px !important;
	height: 3em;
	display: flex;
	justify-content: center;
	justify-items: center;

  p {
    margin-bottom: 0px !important;
    font-size: 1.2em;
    font-weight: bold;
  }
`;

export const Agradece = styled.div`
  background-color: #fff;
	width: 100%;
	text-align: center;
	height: 3em;
`;


/* ::-webkit-input-placeholder  { font-size: 1.5em; }
input:-moz-placeholder { font-size: 1.5em; }
textarea:-moz-placeholder { font-size: 1.5em; } */


/* Extra small devices (portrait phones, less than 576px) */
// @media (max-width: 575.98px) { 


// 	/* body {
// 		background-size: cover;
// 		background-attachment: fixed;
// 	} */


// 	.col-12 {
// 		margin-top: 3em;
// 		padding-left: 2em;
// 		padding-right: 2em;
// 	}

// }

/* Small devices (landscape phones, 576px and up) */
// @media (min-width: 576px) and (max-width: 767.98px) { 


// 	// .col-12 {
// 	// 	margin-top: 3em;
// 	// 	text-align: center;
// 	// 	margin-left: 1.5em;
// 	// 	margin-right: 1.5em;
// 	// }

// }

/* Medium devices (tablets, 768px and up) */
// @media (min-width: 768px) and (max-width: 991.98px) { 


// 	.col-12 {
// 		margin-top: 3em;
// 		text-align: center;
// 	}
// }

/* Large devices (desktops, 992px and up) */
// @media (min-width: 992px) and (max-width: 1199.98px) { 
// 	.col-lg-6 {
// 		text-align: center;
// 	}
// }

// /* Extra large devices (large desktops, 1200px and up) */
// @media (min-width: 1200px) { 
// 	.col-lg-6 {
// 		text-align: center;
// 	}
// }

