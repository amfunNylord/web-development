let input = null;

function isPrimeNumber(input)
{
  if (typeof input == 'number') {
    if (isPrime(input))
      console.log(input, 'is not prime number')
    else
      console.log(input, 'is prime number');
  }
  else if (Array.isArray(input)) {
    for (let i of input)
    {
      if (typeof i == 'number') {
        if (isPrime(i))
          console.log(input, 'is not prime number')
        else
          console.log(input, 'is prime number');
        } else {
          console.log('Parametr is not number or array.');
        }
      }
    }
  else
    console.log('Parametr is not number or array.');
}

function isPrime(input) {
  let isNotPrime = false;
  for (let i = 2; i < input; i++) {
    if (input % i == 0)
      isNotPrime = true;
  }
  return isNotPrime;
}
