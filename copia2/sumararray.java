package repositorio;

public class sumararray {
	public static float[] sum(float[] a1, float[] a2, int n) {
		float[] result = new float [a1.length];
 
		for (int i = 0; i < a1.length; i++) {
			float suma = 0;
			for (int j = 0; j < a2.length; j++) {
			suma = a1[i] + a2[j];
		   }
		   result[i] = suma;
		  	}
		return result;
}
