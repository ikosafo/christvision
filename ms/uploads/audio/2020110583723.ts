import ufetch from "../ufetch";
import axios from "axios";
import { profile } from "console";

export class Products {

  async getProducts() {
    const products = await axios.get("https://fakestoreapi.com/products");
    return products.data;
  }

  protected async generic_query(ctx: any) {
    return await ufetch(`/${ctx.endpoint}/${ctx.query_params}`, {
      method: ctx.method,
      ...ctx.options,
    });
  }
}
