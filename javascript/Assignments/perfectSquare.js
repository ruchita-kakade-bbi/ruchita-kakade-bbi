function isPerfectSquare(num) {
  if (num < 0) {
    return `${num} is negative number`;
  } else {
    for (var i = 0; i < num; i++) {
      if (i * i == num) {
        return `${num} is a square number (${i}*${i})`;
      }
    }
    return `${num} is not a square number `;
  }
}
