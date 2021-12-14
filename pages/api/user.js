// Next.js API route support: https://nextjs.org/docs/api-routes/introduction
import connect from '../../utils/database';

export default async function handler(req, res) {

  if (req.method === 'POST') {
    const { email, nome } = req.body;
    
    if (!nome || !email) {
      res.status(400).json({ error: 'Missing nome or email' });
      return;
    }
    
    const { db } = await connect();
    
    const response = await db.collection('cadastro').insertOne({
      email,
      nome
    });
    res.status(200).json(response.ops[0]);
  } else {
    res.status(400).json({ error: 'Wrong request method' })
  }

}
