#include <iostream>
using namespace std;

// Write a program to convert a temperature from fahrenheit to celsius.

int main() {
    cout << "Fahrenheit: "; //use cout to print a label
    int fahrenheit;     // declare a variable for storing the temp in F
    cin >> fahrenheit;  //using cin, we read that value and put it in the variable
    double celsius = (fahrenheit - 32) / 1.8;    // declare a variable type double (since there will be decimal points)
    cout << celsius; //print the temp in celsius
    return 0;
}