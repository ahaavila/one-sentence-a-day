import { MongoClient } from 'mongodb';

const client = new MongoClient('mongodb+srv://augusto:guv9014@omnistack.cebkf.mongodb.net/test', {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});

export default async function connect() {
  if (!client.isConnected()) await client.connect();

  const db = client.db('one-sentence-a-day');
  return {
    db,
    client
  }
}