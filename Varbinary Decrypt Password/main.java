public class Main
{
    public static void main(String[] args) {
        System.out.println(Decrypt("]CQGWCWK"));
    }
        
    public static String Decrypt(String value) {
        String result = "";
        try
        {
            int lokasi = 0;
            String code = "1234567890";
            for (int i = 0; i < value.length(); i++)
            {
                lokasi = i % code.length() + 1;
                result += (char)(mySubString(value, i, 1).toCharArray()[0] ^ mySubString(code, lokasi, 1).toCharArray()[0]);
            }
        }
        catch (Exception e)
        { 
            //
        }
        return result;
    }
              
    static String mySubString(String myString, int start, int length) {
        return myString.substring(start, Math.min(start + length, 
        myString.length()));
    }
}