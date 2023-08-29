<?php

class CascadingPalindrome
{
    private $parameter; // Stores the input parameter containing various components
    private $palindromes = []; // Holds the list of detected palindromes

    public function __construct($parameter)
    {
        $this->parameter = $parameter; // Initializes the parameter property with the input value
    }

    // Checks if a given string is a palindrome
    private function is_palindrome($string)
    {
        return $string == strrev($string); // Compares the string with its reverse to determine if it's a palindrome
    }

    // Finds and stores the palindromes present in the input parameter
    public function find_palindromes()
    {
        if ($this->parameter != "") { // Check if the parameter is not empty
            foreach (explode(" ", $this->parameter) as $item) {
                // Iterate through each component of the parameter
                if ($this->is_palindrome($item)) {
                    // If the current component is a palindrome
                    $this->palindromes[] = $item; // Store the palindrome in the list
                } else {
                    $this->palindromes[] = "Palindrome Not Found"; // Store "Palindrome Not Found" if not a palindrome
                }
            }
        } else {
            $this->palindromes[] = "Parameter is empty"; // If the parameter is empty, store this message
        }
    }

    // Returns the detected palindromes as a formatted string
    public function get_palindromes()
    {
        return implode(" ", $this->palindromes); // Convert the array of palindromes into a space-separated string
    }
}

// Main function for testing
function main()
{
    $parameter = "madam"; // Example parameter value
    $palindrome = new CascadingPalindrome($parameter); // Create an instance of the CascadingPalindrome class
    $palindrome->find_palindromes(); // Find palindromes in the input parameter
    echo $palindrome->get_palindromes(); // Display the detected palindromes
}

main(); // Call the main function to run the code
